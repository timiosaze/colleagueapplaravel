<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colleague extends Model
{
    //
    public function getRatingAttribute($value)
    {
        return number_format($value,1);
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
