<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $fillable=[
        'name',
    ];

    public function rentals(){
        return $this->belongsToMany('App\Models\Rental','rentals');
    }
}
