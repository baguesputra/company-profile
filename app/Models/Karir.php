<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'status',
        'requirements',
        'responsibilities',
        'application_deadline',
        'is_active'
    ];

    protected $casts = [
        'application_deadline' => 'date',
        'is_active' => 'boolean'
    ];
}
