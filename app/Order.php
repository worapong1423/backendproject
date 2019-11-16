<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable =[
        'receive_sign',
        'customer_receive_name',
        'send_sign',
        'customer_send_name',
    ];

    public  function hotel(){
        return $this->belongsTo(Hotel::class);
    }
    public  function user(){
        return $this->belongsTo(User::class,'receiver_id');
    }
    public  function ordersdetail(){
        return $this->hasMany(Orderdetail::class);
    }
}
