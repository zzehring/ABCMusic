<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'address',
        'phone_number'

    ];
}
