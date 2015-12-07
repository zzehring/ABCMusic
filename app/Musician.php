<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{

    public $timestamps = false;

    protected $fillable =[
        'name',
        'ssn',
        'address'
    ];
}
