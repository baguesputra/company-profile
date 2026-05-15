<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'poli', 'image', 'link', 'status'];

    public function jadwal()
    {
        return $this->hasMany(JadwalDokter::class, 'id_doctors');
    }
}
