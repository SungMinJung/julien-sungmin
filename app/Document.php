<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'type', 
        'title',
        'content',
        'main_image',
        'view_count',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
