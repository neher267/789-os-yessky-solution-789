<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function request()
    {
    	return $this->belongsTo(Request::class, 'order_id');
    }
}
