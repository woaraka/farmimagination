<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'headline', 'details', 'serial', 'visible', 'photo',
    ];
}
