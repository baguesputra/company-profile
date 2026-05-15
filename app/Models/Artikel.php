<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'published_date',
        'is_active'
    ];

    protected $casts = [
        'published_date' => 'date',
        'is_active' => 'boolean'
    ];
}
