<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    //
    protected $table = 'rates';
    protected $fillable =[
        'name',
        'price',
    ];

    public  function hotel(){
        return $this->belongsTo(Hotel::class);
    }
    public  function ordersdetail(){
        return $this->hasMany(Orderdetail::class);
    }
}
