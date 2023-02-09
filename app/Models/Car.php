<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $fillable=[
        'registration',
        'chassis',
        'year',
        'capacity',
        'isAutomatic',
        'equipment',
        'flaw',
        'mileage',
        'isAvailable',
        'model_id',
        'fuel_id',
        'type_id',
        'color_id',
    ];
    
    public function rentaltypes(){
        return $this->belongsToMany('App\Models\Rentaltype','rentalrates');
    }

    public function rentalrates(){
        return $this->hasMany('App\Models\Rentalrate');
    }

    public function rentals(){
        return $this->belongsToMany('App\Models\Rental','rentals');
    }

    public function images(){
        return $this->hasMany('App\Models\Image');
    }

    public function model(){
        return $this->belongsTo('App\Models\Model');
    }

    public function fuel(){
        return $this->belongsTo('App\Models\Fuel');
    }

    public function type(){
        return $this->belongsTo('App\Models\Type');
    }

    public function color(){
        return $this->belongsTo('App\Models\Color');
    }
}
