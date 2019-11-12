<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $table = 'shop';
    protected $fillable =[
        'tel',
        'taxid',
        'address',
        'district',
        'province',
        'email',
        'zipcode',
    ];
}
