<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable =[
        'name',
        'product',
        'amountin',
        'amountout',
    ];

    public  function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
