<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public $table = "musics";

    public $fillable = ['singer', 'name', 'lyric', 'duration', 'size', 'genre'];
}
