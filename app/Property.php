<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
   


    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }





}
