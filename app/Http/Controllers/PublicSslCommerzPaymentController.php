<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Routing\UrlGenerator;
use App\Http\Controllers;
use App\Order;
use Mail;
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

        $post_data = array();
        $post_data['total_amount'] = $request->total_amount;
        $post_data['currency'] = $request->currency;
        $post_data['tran_id'] = $request->session()->get('tran_id');

        $this->storeOrderEntry($request->total_amount, $request->currency);

        $_SESSION['payment_values']['tran_id']=$post_data['tran_id'];
        $server_name=$request->root()."/dashboard/";
        $post_data['success_url'] = $server_name . "success";
        $post_data['fail_url'] = $server_name . "fail";
        $post_data['cancel_url'] = $server_name . "cancel";

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->user()->name;
        $post_data['cus_email'] = $request->user()->email;
        $post_data['cus_add1'] = '';

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

        $sslc = new SSLCommerz();

        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )

        $payment_options = $sslc->initiate($post_data, false);

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    private function storeOrderEntry($totalAmount, $corrency)
    {
	$data = new Order;
	$data->orderable_id = request()->session()->get('tran_id');
	$data->orderable_type = request()->session()->get('type');
	$data->order_status = "Pending";
	$data->grand_total = $totalAmount;
	$data->currency = $corrency;
	$data->save();
    }

    private function sendEmail($tran_id)
    {
        $user = request()->user();

        $data = array();
        $data['to'] = $user->email;
        $data['name'] = $user->name;
        $data['subject'] = 'Payment Confirmation';
        $data['body'] = 'Thank you for your payment. Your transaction id is '.$tran_id;
        
        Mail::send('mail.template', $data, function($message) use ($data){
            $message->from('jhonbaker404@gmail.com', 'Sky Solution');
            $message->to($data['to']);
            $message->subject($data['subject']);
        });
    }

    private function sendEmailFail()
    {
        $request->session()->forget('tran_id');
        $user = request()->user();

        $data = array();
        $data['to'] = $user->email;
        $data['name'] = $user->name;
        $data['subject'] = 'Payment Faied';
        $data['body'] = 'Sorry, Your Payment is not complete. Please try again!';
        
        Mail::send('mail.template', $data, function($message) use ($data){
            $message->from('jhonbaker404@gmail.com', 'Sky Solution');
            $message->to($data['to']);
            $message->subject($data['subject']);
        });
    }

    protected function forgetSession() {
        request()->session()->forget('tran_id');        
        request()->session()->forget('type');        
    }


    public function success(Request $request) 
    {
        $sslc = new SSLCommerz();
        $tran_id = $_SESSION['payment_values']['tran_id'];

        $order_detials = Order::where('orderable_id', $tran_id)
                                ->where('orderable_type', request()->session()->get('type'))
                                ->first();

        if ($order_detials) 
        {
            if($order_detials->order_status=='Pending')
            {
                $validation = $sslc->orderValidate(
                                    $tran_id, 
                                    $order_detials->grand_total,
                                    $order_detials->currency,
                                    $request->all()
                                );

                if($validation) 
                {
                    $update_product = DB::table('orders')
                                ->where('orderable_id', $tran_id)
                                ->where('orderable_type', request()->session()->get('type'))
                                ->update(['order_status' => 'Processing']);

                    $this->sendEmail($update_product->id);
                    $this->forgetSession();

                    return view('backend.pages.payment.success')->withSuccess('Transaction is successfully Complete'); 
                }
                else 
                {
                    $update_product = DB::table('orders')
                                ->where('orderable_id', $tran_id)
                                ->where('orderable_type', request()->session()->get('type'))
                                ->update(['order_status' => 'Failed']);
                    $this->forgetSession();                                
                    return view('backend.pages.payment.error', compact('validation'))
                    		->withError('validation Fail');
                }
            }
        }
        else
        {
        	$this->forgetSession();
            return view('backend.pages.payment.error')->withError('Invalid Transaction');
        }         
    }


    public function fail(Request $request) 
    {
        $this->sendEmailFail();

        $tran_id = $_SESSION['payment_values']['tran_id'];
        $order_detials = Order::where('orderable_id', $tran_id)
                            ->where('orderable_type', request()->session()->get('type'))
                            ->first();

        if($order_detials->order_status=='Pending')
        {
        	$order_detials->order_status = 'Failed';
        	$order_detials->save();

            $errorDes = "Transaction is Falied";                
        }

        $this->forgetSession();

        return view('backend.pages.payment.fail', compact('errorDes'));        
                            
    }

    public function cancel(Request $request) 
    {
        $tran_id = $_SESSION['payment_values']['tran_id'];
        $order_detials = Order::where('orderable_id', $tran_id)
                            ->where('orderable_type', request()->session()->get('type'))
                            ->first();

        if($order_detials->order_status=='Pending')
        {
        	$order_detials->order_status = 'Canceled';
        	$order_detials->save();              
        }

        $this->forgetSession();

        return redirect('dashboard')->withError('Transaction is Falied');               
        
    }

    public function ipn(Request $request) 
    {
      if($request->input('tran_id'))
      {
          	$tran_id = $request->input('tran_id');
          	$order_detials = Order::where('orderable_id', $tran_id)
                            ->where('orderable_type', request()->session()->get('type'))
                            ->first();
            $message = "";

		if($order_details->order_status =='Pending')
		{
		  $sslc = new SSLCommerz();
		  $validation = $sslc->orderValidate(
		  	$tran_id, 
		  	$order_details->grand_total, 
		  	$order_details->currency, 
		  	$request->all()
		  );

		  if($validation) 
		  {
		      
		      $order_detials->order_status = 'Processing';
				$order_detials->save();                                    
		      $message = "Transaction is successfully Complete";
		  }
		  else
		  {
		      $order_detials->order_status = 'Failed';
				$order_detials->save();                                    
		      $message = "validation Fail";
		  } 
		   
		}
		else if(
			$order_details->order_status == 'Processing' || 
			$order_details->order_status =='Complete'
		)

		{
			$message = "Transaction is already successfully Complete";
		}
		else
		{
			$message = "Invalid Transaction";
		}  
        }
        else
        {
            $message = "Inavalid Data";
        }

        $this->forgetSession();    

        return redirect('dashboard')->withSuccess($message);  
    }
}