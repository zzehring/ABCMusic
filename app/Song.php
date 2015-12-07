<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'song_id';

    protected $fillable =[
        'song_id',
        'title',
        'musician_id',
        'album_id'
    ];
}
