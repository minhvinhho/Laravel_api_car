<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Mmodel;

class Model extends Mmodel
{
    //
    protected $fillable=[
        'name',
        'make_id',
    ];

    public function cars(){
        return $this->hasMany('App\Models\Car');
    }

    public function make(){
        return $this->belongsTo('App\Models\Make');
    }
}
