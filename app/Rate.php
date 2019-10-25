<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    //
    protected $table = 'rates';
    protected $fillable =[
        'product_name',
        'product_price',
    ];

    public  function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
