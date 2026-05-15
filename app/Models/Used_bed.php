<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Used_bed extends Model
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
