<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function continet()
    {
    	return $this->belongsTo(Continent::class, 'continent_id', 'id');
    }
}
