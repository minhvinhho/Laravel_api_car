<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable=[
        'name',
        'contact',
        'address',
        'credentials',
    ];

    public function rentals(){
        return $this->belongsToMany('App\Models\Rental','rentals');
    }

}
