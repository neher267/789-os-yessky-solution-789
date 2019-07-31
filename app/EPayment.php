<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EPayment extends Model
{
    protected $fillable = [
	    	'company_name',
		'contact_person',
		'address',
		'city',
		'province_State',
		'country',
		'postal_zip_code',
		'email',
		'phone',
		'vpc_MerchTxnRef',
		'vpc_amount',
		'comments'
	    ];
}
