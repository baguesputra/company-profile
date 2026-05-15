<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $fillable = [
        'nama',
        'sub_nama',
        'jumlah',
    ];

    protected $casts = [
        'status' => 'string',
    ];
}
