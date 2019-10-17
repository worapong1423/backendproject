<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //

    protected $table = 'hotels';
    protected $fillable =[
        'Hotel_name',
        'Hotel_tel',
        'Hotel_taxid',
        'Hotel_address',
        'Hotel_district',
        'Hotel_province',
        'Hotel_email',
        'Hotel_zipcode',
    ];
}
