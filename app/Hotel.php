<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //

    protected $table = 'hotels';
    protected $fillable =[
        'name',
        'tel',
        'taxid',
        'address',
        'district',
        'province',
        'email',
        'zipcode',
    ];

    public  function rates(){
        return $this->hasMany(Rate::class);
    }

    public  function orders(){
        return $this->hasMany(Order::class);
    }
}
