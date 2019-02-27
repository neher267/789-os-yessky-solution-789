<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Routing\UrlGenerator;
use App\Http\Controllers;
use App\Order;
session_start();
class PublicSslCommerzPaymentController extends Controller
{
    public function index(Request $request) 
    {
        //dd($request->session()->has('tran_id'));
        if(!$request->session()->has('tran_id'))
        {
            return back();
        }
        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "order_id","order_status" field contain status of the transaction, "grand_total" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $post_data = array();
        //$post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['total_amount'] = $request->total_amount;
        //$post_data['currency'] = "BDT";
        $post_data['currency'] = $request->currency;
        //$post_data['tran_id'] = '76176590'; // tran_id must be unique
        $post_data['tran_id'] = $request->session()->get('tran_id');

        $this->storeOrderEntry($post_data['tran_id'], $request->total_amount, $request->currency);

        #Start to save these value  in session to pick in success page.
        $_SESSION['payment_values']['tran_id']=$post_data['tran_id'];
        #End to save these value  in session to pick in success page.
        $server_name=$request->root()."/dashboard/";
        $post_data['success_url'] = $server_name . "success";
        $post_data['fail_url'] = $server_name . "fail";
        $post_data['cancel_url'] = $server_name . "cancel";
        # CUSTOMER INFORMATION
        // $post_data['cus_name'] = $request->user()->name;
        // $post_data['cus_email'] = $request->user()->email;
        // $post_data['cus_add1'] = '';

        $post_data['cus_name'] = 'NayemSayed';
        $post_data['cus_email'] = 'cmsayed@gmail.com';
        $post_data['cus_add1'] = '93 B Eskaton';

        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "";
        $post_data['cus_phone'] = $request->user()->mobile;
        $post_data['cus_fax'] = "";
        # SHIPMENT INFORMATION
        $post_data['ship_name'] = '';
        $post_data['ship_add1 '] = '';
        $post_data['ship_add2'] = "";
        $post_data['ship_city'] = "";
        $post_data['ship_state'] = "";
        $post_data['ship_postcode'] = "";
        $post_data['ship_country'] = "";
        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";
        
        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('orders')
                                ->where('order_id', $post_data['tran_id'])
                                ->update(['order_status' => 'Pending','currency' => $post_data['currency']]);
        $sslc = new SSLCommerz();

        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->initiate($post_data, false);

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    private function storeOrderEntry($tranId, $totalAmount, $corrency)
    {
        $data = new Order;
        $data->order_id = $tranId;
        $data->grand_total = $totalAmount;
        $data->currency = $corrency;
        $data->order_status = 'Pending';

        $data->save();
    }


    public function success(Request $request) 
    {
        //dd($request->all());
        //echo "Transaction is Successful";
        $sslc = new SSLCommerz();
        #Start to received these value from session. which was saved in index function.
        $tran_id = $_SESSION['payment_values']['tran_id'];

        #End to received these value from session. which was saved in index function.
        #Check order status in order tabel against the transaction id or order id.
        $order_detials = Order::where('order_id', $tran_id)->first();
        if ($order_detials) {
            if($order_detials->order_status=='Pending'){
                $validation = $sslc->orderValidate(
                    $tran_id, 
                    $order_detials->grand_total,
                    $order_detials->currency,
                    $request->all());

                //Hash validation failed

                //dd($validation);

                if($validation == TRUE) {
                    /*
                    That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successfull transaction to customer
                    */ 
                    $update_product = DB::table('orders')
                                ->where('order_id', $tran_id)
                                ->update(['order_status' => 'Processing']);
                    return view('backend.pages.payment.success')->withSuccess('Transaction is successfully Complete'); 
                } else {
                    //dd('validation false');
                    /*
                    That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */ 
                    $update_product = DB::table('orders')
                                ->where('order_id', $tran_id)
                                ->update(['order_status' => 'Failed']);
                    //echo "validation Fail";
                    return view('backend.pages.payment.error', compact('validation'))->withError('validation Fail');
                }
            }    
            else if($order_detials->order_status=='Processing' || $order_detials->order_status=='Complete') {
                /*
                 That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
                 */
                //echo "Transaction is successfully Complete";
                return view('backend.pages.payment.success')->withSuccess('Transaction is successfully Complete'); 

            }
        }
        else
        {
             #That means something wrong happened. You can redirect customer to your product page.
            //echo "<br>Invalid Transaction";
            return view('backend.pages.payment.error')->withError('Invalid Transaction');

        }         
    }



    public function fail(Request $request) 
    {
        $tran_id = $_SESSION['payment_values']['tran_id'];
        $order_detials = DB::table('orders')
                            ->where('order_id', $tran_id)
                            ->select('order_id', 'order_status','currency','grand_total')->first();
        if($order_detials->order_status=='Pending')
        {
            $update_product = DB::table('orders')
                            ->where('order_id', $tran_id)
                            ->update(['order_status' => 'Failed']);
            $errorDes = "Transaction is Falied";                
        }
         else if($order_detials->order_status=='Processing' || $order_detials->order_status=='Complete')
        {
            $errorDes = "Transaction is already Successful";
        }  
        else
        {
            $errorDes = "Transaction is Invalid"; 
        }

        return view('backend.pages.payment.fail', compact('errorDes'));        
                            
    }
     public function cancel(Request $request) 
    {
        $tran_id = $_SESSION['payment_values']['tran_id'];
        $order_detials = DB::table('orders')
                            ->where('order_id', $tran_id)
                            ->select('order_id', 'order_status','currency','grand_total')->first();
        if($order_detials){
            if($order_detials->order_status=='Pending')
            {
                $update_product = DB::table('orders')
                                ->where('order_id', $tran_id)
                                ->update(['order_status' => 'Canceled']);
                echo "Transaction is Cancel";                
            }
             else if($order_detials->order_status=='Processing' || $order_detials->order_status=='Complete')
            {
                echo "Transaction is already Successful";
            }
            }  
        else
        {
            echo "Transaction is Invalid"; 
        }                 
        
    }

    public function ipn(Request $request) 
    {
        #Received all the payement information from the gateway  
      if($request->input('tran_id')) #Check transation id is posted or not.
      {
          $tran_id = $request->input('tran_id');
        #Check order status in order tabel against the transaction id or order id.
         $order_details = DB::table('orders')
                            ->where('order_id', $tran_id)
                            ->select('order_id', 'order_status','currency','grand_total')->first();
                if($order_details->order_status =='Pending')
                {
                    $sslc = new SSLCommerz();
                    $validation = $sslc->orderValidate($tran_id, $order_details->grand_total, $order_details->currency, $request->all());
                    if($validation == TRUE) 
                    {
                        /*
                        That means IPN worked. Here you need to update order status
                        in order table as Processing or Complete.
                        Here you can also sent sms or email for successfull transaction to customer
                        */ 
                        $update_product = DB::table('orders')
                                    ->where('order_id', $tran_id)
                                    ->update(['order_status' => 'Processing']);
                                    
                        echo "Transaction is successfully Complete";
                    }
                    else
                    {
                        /*
                        That means IPN worked, but Transation validation failed.
                        Here you need to update order status as Failed in order table.
                        */ 
                        $update_product = DB::table('orders')
                                    ->where('order_id', $tran_id)
                                    ->update(['order_status' => 'Failed']);
                                    
                        echo "validation Fail";
                    } 
                     
                }
                else if($order_details->order_status == 'Processing' || $order_details->order_status =='Complete')
                {
                    
                  #That means Order status already updated. No need to udate database.
                     
                    echo "Transaction is already successfully Complete";
                }
                else
                {
                   #That means something wrong happened. You can redirect customer to your product page.
                     
                    echo "Invalid Transaction";
                }  
        }
        else
        {
            echo "Inavalid Data";
        }      
    }
}