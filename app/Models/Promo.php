<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'valid_until',
        'is_active'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'valid_until' => 'date',
        'is_active' => 'boolean'
    ];
}
