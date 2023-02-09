<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //it's not a many to many table
    protected $fillable=[
        'pickupDate',
        'returnDate',
        'isPaid',
        'price',
        'addCharges',
        'status_id',
        'car_id',
        'customer_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }

    public function status(){
        return $this->belongsTo('App\Models\Status');
    }

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }
}
