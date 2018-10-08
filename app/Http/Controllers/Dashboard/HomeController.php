<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request as FlightRequest;

class HomeController extends Controller
{
    public function index()
    {
        $results = FlightRequest::where('status', 'pending')->latest()->get();
        $status = 'Pending'; 
        return view('backend.pages.index', compact('results', 'status'));    	
    }
    
    public function contact()
    {
    	return view('backend.pages.contact-us');
    }

    public function request_status($status)
    {
        $results = FlightRequest::where('status', $status)->latest()->get();
        
        return view('backend.pages.status', compact('results', 'status'));    	
    }    
}
