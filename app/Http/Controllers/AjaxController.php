<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operator;
use DB;

class AjaxController extends Controller
{
    public function get_operators(Request $request)
    {
    	$operators = DB::table('operators')
                ->select('id','name','address_line_1')   
      			->orWhere('name', 'like', '%' . $request->operator . '%')->get();




    	//return Operator::where('name', 'like', 'T%')->get();
        return $operators;
    }
}
