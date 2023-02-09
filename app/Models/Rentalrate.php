<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentalrate extends Model
{
    //
    protected $table="rentalrates";
    protected $fillable=[
        'car_id',
        'rentaltype_id',
        'rate',
    ];
    
    public function rentaltype(){
        return $this->belongsTo('App\Models\Rentaltype');
    }

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }
}
