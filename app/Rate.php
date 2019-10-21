<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    //
    protected $table = 'rates';
    protected $fillable =[
        'Product_name',
        'Product_price',
    ];

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
