<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentaltype extends Model
{
    //
    protected $fillable=[
        'name',
    ];
    
    public function cars(){
        return $this->belongsToMany('App\Models\Car','rentalrates');
    }
}
