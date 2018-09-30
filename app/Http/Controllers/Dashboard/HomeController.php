<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('backend.pages.index');    	
    }
    
    public function contact()
    {
    	return view('backend.pages.contact-us');
    }

    public function request_status($status)
    {
    	return view('backend.pages.status');    	
    }    
}
