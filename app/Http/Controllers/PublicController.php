<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
	public $str;
	public function __construct()
	{
		$this->str = file_get_contents(asset('airlines.txt'));
	}

    public function repleace()
    {
    	$countries = \App\Country::get();
		$countries->each(function($country){
			$oldMessage = '4,"'.$country->name.'"';
			$deletedFormat = "4,$country->id";
			$this->str=str_replace($oldMessage, $deletedFormat,$this->str);
		});

		dd($this->str);

		//file_put_contents(asset('airlines.txt'), $this->str);
    }
}
