<?php

use Illuminate\Support\Facades\Route;


//---------------------------------------Route Web-------------------------
Route::get('/', function () {
    return view('web.pages.dashboard');
});

// Route untuk halaman dashboard
Route::get('/dashboard', function () {
    return view('web.pages.dashboard');
})->name('web.dashboard');

// Route untuk halaman Galeri
Route::get('/galery', function () {
    return view('web.pages.galery');
})->name('web.galery');

// Route untuk halaman Jadwal Dokter
Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('web.jadwal');

// Route untuk halaman Karir
Route::get('/karir', [App\Http\Controllers\KarirController::class, 'index'])->name('web.karir');

// Route untuk detail karir
Route::get('/karir/{id}', [App\Http\Controllers\KarirController::class, 'show'])->name('web.karir.detail');

// Route untuk halaman Promo Spesial
Route::get('/promo', [App\Http\Controllers\PromoController::class, 'index'])->name('web.promo');

// Route untuk halaman Layanan Medis
Route::get('/layanan_medis', function () {
    return view('web.pages.layanan_medis');
})->name('web.layanan_medis');

// Route untuk halaman Layanan Unggulan
Route::get('/layanan_unggulan', function () {
    return view('web.pages.layanan_unggulan');
})->name('web.layanan_unggulan');

// Sub-routes untuk Layanan Unggulan
Route::get('/layanan_unggulan/eye_center', function () {
    return view('web.pages.layanan_unggulan.eye_center');
})->name('web.layanan_unggulan.eye_center');

Route::get('/layanan_unggulan/one_day_care', function () {
    return view('web.pages.layanan_unggulan.one_day_care');
})->name('web.layanan_unggulan.one_day_care');

Route::get('/layanan_unggulan/cardiovascular', function () {
    return view('web.pages.layanan_unggulan.cardiovascular');
})->name('web.layanan_unggulan.cardiovascular');

Route::get('/layanan_unggulan/aesthetic_center', function () {
    return view('web.pages.layanan_unggulan.aesthetic_center');
})->name('web.layanan_unggulan.aesthetic_center');

Route::get('/layanan_unggulan/medical_check_up_(mcu)', function () {
    return view('web.pages.layanan_unggulan.mcu');
})->name('web.layanan_unggulan.medical_check_up_(mcu)');

Route::get('/layanan_unggulan/fertilisasi_in_vitro_(ivf)', function () {
    return view('web.pages.layanan_unggulan.ivf');
})->name('web.layanan_unggulan.fertilisasi_in_vitro_(ivf)');

Route::get('/layanan_unggulan/ruang_ok_(operating_room)', function () {
    return view('web.pages.layanan_unggulan.ruang_ok');
})->name('web.layanan_unggulan.ruang_ok_(operating_room)');

Route::get('/layanan_unggulan/cathlab', function () {
    return view('web.pages.layanan_unggulan.cathlab');
})->name('web.layanan_unggulan.cathlab');

Route::get('/layanan_unggulan/hemodialisis_centre', function () {
    return view('web.pages.layanan_unggulan.hemodialisis_centre');
})->name('web.layanan_unggulan.hemodialisis_centre');

Route::get('/layanan_unggulan/physical_rehabilitation_centre', function () {
    return view('web.pages.layanan_unggulan.physical_rehabilitation_centre');
})->name('web.layanan_unggulan.physical_rehabilitation_centre');

Route::get('/layanan_unggulan/maternity_centre', function () {
    return view('web.pages.layanan_unggulan.maternity_centre');
})->name('web.layanan_unggulan.maternity_centre');

Route::get('/layanan_unggulan/gastroenterohepatology_centre', function () {
    return view('web.pages.layanan_unggulan.gastroenterohepatology_centre');
})->name('web.layanan_unggulan.gastroenterohepatology_centre');

Route::get('/layanan_unggulan/radiodiagnostik_dan_laboratorium', function () {
    return view('web.pages.layanan_unggulan.radiodiagnostik_dan_laboratorium');
})->name('web.layanan_unggulan.radiodiagnostik_dan_laboratorium');

// Route untuk halaman Rawat Inap
Route::get('/rawat_inap', function () {
    return view('web.pages.rawat_inap');
})->name('web.rawat_inap');

// Group route untuk Rawat Jalan
Route::prefix('rawat-jalan')->group(function () {
    Route::get('/', function () {
        return view('web.pages.rawat_jalan');
    })->name('web.rawat_jalan');

    Route::get('/rj_obgyn', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_obgyn');
    })->name('web.layanan_medis.rawat_jalan.rj_obgyn');

    Route::get('/rj_anak', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_anak');
    })->name('web.layanan_medis.rawat_jalan.rj_anak');

    Route::get('/rj_bedah', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_bedah');
    })->name('web.layanan_medis.rawat_jalan.rj_bedah');

    Route::get('/rj_bedah_digestive', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_bedah_digestive');
    })->name('web.layanan_medis.rawat_jalan.rj_bedah_digestive');

    Route::get('/rj_tht', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_tht');
    })->name('web.layanan_medis.rawat_jalan.rj_tht');

    Route::get('/rj_saraf', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_saraf');
    })->name('web.layanan_medis.rawat_jalan.rj_saraf');

    Route::get('/rj_paru', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_paru');
    })->name('web.layanan_medis.rawat_jalan.rj_paru');

    Route::get('/rj_urologi', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_urologi');
    })->name('web.layanan_medis.rawat_jalan.rj_urologi');

    Route::get('/rj_penyakit_dalam', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_penyakit_dalam');
    })->name('web.layanan_medis.rawat_jalan.rj_penyakit_dalam');

    Route::get('/rj_anastesi', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_anastesi');
    })->name('web.layanan_medis.rawat_jalan.rj_anastesi');

    Route::get('/rj_gizi_klinik', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_gizi_klinik');
    })->name('web.layanan_medis.rawat_jalan.rj_gizi_klinik');

    Route::get('/rj_andrologi', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_andrologi');
    })->name('web.layanan_medis.rawat_jalan.rj_andrologi');

    Route::get('/rj_eksekutif', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_eksekutif');
    })->name('web.layanan_medis.rawat_jalan.rj_eksekutif');

    Route::get('/rj_gigi_dan_bedah_mulut', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_gigi_dan_bedah_mulut');
    })->name('web.layanan_medis.rawat_jalan.rj_gigi_dan_bedah_mulut');

    Route::get('/rj_kesehatan_jiwa', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_kesehatan_jiwa');
    })->name('web.layanan_medis.rawat_jalan.rj_kesehatan_jiwa');

    Route::get('/rj_orthopedi', function () {
        return view('web.pages.layanan_medis.rawat_jalan.rj_orthopedi');
    })->name('web.layanan_medis.rawat_jalan.rj_orthopedi');
});

// Route untuk halaman Rawat Poli
Route::get('/poli', function () {
    return view('web.pages.poli');
})->name('web.poli');

// Route untuk halaman Profile
Route::get('/profile', function () {
    return view('web.pages.profile');
})->name('web.profile');

// Route untuk halaman Informasi
Route::get('/informasi', [App\Http\Controllers\ArtikelController::class, 'index'])->name('web.informasi');

// Route untuk detail artikel
Route::get('/informasi/artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'show'])->name('web.artikel.detail');

// Route untuk halaman FAQ
Route::get('/faq', function () {
    return view('web.pages.faq');
})->name('web.faq');

// Route untuk halaman Kritik dan Saran
Route::get('/kritik-saran', [App\Http\Controllers\KritikSaranController::class, 'index'])->name('web.kritik_saran');
Route::post('/kritik-saran', [App\Http\Controllers\KritikSaranController::class, 'store'])->name('web.kritik_saran.store');

// Route untuk halaman Prosedur Pendaftaran
Route::get('/prosedur-pendaftaran', function () {
    return view('web.pages.prosedur_pendaftaran');
})->name('web.prosedur_pendaftaran');

// Route untuk halaman Pengumuman
Route::get('/pengumuman', function () {
    return view('web.pages.pengumuman');
})->name('web.pengumuman');

// Route Artikel 1
Route::get('/informasi/artikel1', function () {
    return view('web.pages.artikel.artikel1');
})->name('web.artikel.artikel1');

//Route Dokter 1
Route::get('/jadwal/dokter1', function () {
    return view('web.pages.dokter.dokter1');
})->name('web.jadwal.dokter1');

//Route Karir 1
Route::get('/karir/karir1', function () {
    return view('web.pages.karir.karir1');
})->name('web.karir.karir1');


//-----------------------------------------Route CMS----------------------
// Route untuk halaman CMS dengan middleware admin
Route::prefix('admin-panel')->middleware('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('cms.dashboard');
    })->name('cms.dashboard');

    // Routes untuk Dokter
    Route::get('/doctors', [App\Http\Controllers\AdminController::class, 'doctors'])->name('admin.doctors');
    Route::get('/doctors/create', [App\Http\Controllers\AdminController::class, 'createDoctor'])->name('admin.doctors.create');
    Route::post('/doctors', [App\Http\Controllers\AdminController::class, 'storeDoctor'])->name('admin.doctors.store');
    Route::get('/doctors/{id}/edit', [App\Http\Controllers\AdminController::class, 'editDoctor'])->name('admin.doctors.edit');
    Route::put('/doctors/{id}', [App\Http\Controllers\AdminController::class, 'updateDoctor'])->name('admin.doctors.update');
    Route::delete('/doctors/{id}', [App\Http\Controllers\AdminController::class, 'deleteDoctor'])->name('admin.doctors.delete');

    // Routes untuk Promo
    Route::get('/promos', [App\Http\Controllers\AdminController::class, 'promos'])->name('admin.promos');

    // Routes untuk Artikel
    Route::get('/artikels', [App\Http\Controllers\AdminController::class, 'artikels'])->name('admin.artikels');

    // Routes untuk Karir
    Route::get('/karirs', [App\Http\Controllers\AdminController::class, 'karirs'])->name('admin.karirs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
