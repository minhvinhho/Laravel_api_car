<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable=[
        'fileName',
        'car_id'
    ];
    
    public function car(){
        return $this->belongsTo('App\Models\Car');
    }
}
