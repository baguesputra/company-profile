<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    protected $table = 'jadwal_dokter';

    protected $fillable = [
        'id_doctors',
        'FMDDOKTERN',
        'FMJShift',
        'FMJHari01',
        'FMJHari02',
        'FMJHari03',
        'FMJHari04',
        'FMJHari05',
        'FMJHari06',
        'FMJHari07',
    ];

    public $timestamps = false;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'id_doctors');
    }
}
