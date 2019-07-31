<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EPayment;

class PaymentController extends Controller
{
	public function index()
	{
		return view('backend.pages.payment-history');
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.payment.create');
    }   

    public function e_payment()
    {
        return view('backend.pages.payment.e-payment');
    } 

    
    public function e_payment_store(Request $request)
    {
        $epayment = EPayment::create($request->all());

        $request->session()->put('tran_id', $epayment->id);
        $request->session()->put('type', 'e-payment');

        return view('backend.pages.payment.create');
    }
     
}
