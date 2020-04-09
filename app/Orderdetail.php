<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    // protected  $primaryKey = 'order_id';
    protected $table = 'order_detail';
    protected $fillable =[
        'rate',
        'amountin',
        'amountout',
    ];
    public  function order(){
        return $this->belongsTo(Order::class);
    }
    public  function rate(){
        return $this->belongsTo(Rate::class,'product_id');
    }
}
