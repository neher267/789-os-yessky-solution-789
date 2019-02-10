<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use App\Airport;
use DB;

class AjaxController extends Controller
{
    public function get_operators(Request $request)
    {
    	$operators = DB::table('operators')
                ->select('id','name','address_line_1')   
      			->orWhere('name', 'like', '%' . $request->operator . '%')->get();
        return $operators;
    }

    public function get_airports(Request $request)
    {
    	$operators = DB::table('airports')
                ->select('id','name','address')   
      			->orWhere('name', 'like', '%' . $request->name . '%')->get();
        return $operators;
    }
}
