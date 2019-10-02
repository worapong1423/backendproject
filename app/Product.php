<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable =[
        'Product_name',
        'Product_amountin',
        'Product_amountout',

    ];
}
