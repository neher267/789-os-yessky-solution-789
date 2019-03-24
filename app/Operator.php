<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}
