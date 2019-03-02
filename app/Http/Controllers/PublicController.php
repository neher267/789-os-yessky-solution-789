<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
	public $str;
	public function __construct()
	{
		$this->str = file_get_contents(asset('airports.txt'));
	}

    public function repleace()
    {
    	$countries = \App\Country::get();
		$countries->each(function($country){
			$this->str=str_replace($country->name, $country->id,$this->str);
		});

		dd($this->str);

		//file_put_contents(asset('airlines.txt'), $this->str);
    }

}
