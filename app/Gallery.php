<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'name', 'description', 'category', 'class', 'photo', 'serial', 'visible',
    ];
}
