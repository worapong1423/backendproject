<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    //
    protected $table = 'table_list';
    protected $fillable =[
        'name',
        'surname',
        'age',
    ];
}
