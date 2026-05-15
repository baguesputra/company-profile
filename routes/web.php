<?php

use Illuminate\Support\Facades\Route;

// Route for Jadwal Dokter using adminIndex method for listing
Route::get('admin/jadwal_dokter', [App\Http\Controllers\JadwalController::class, 'adminIndex'])->name('admin.jadwal_dokter.index');

// Other resource routes for create, store, edit, update, destroy can be added individually if needed
Route::get('admin/jadwal_dokter/create', [App\Http\Controllers\JadwalController::class, 'create'])->name('admin.jadwal_dokter.create');
Route::post('admin/jadwal_dokter', [App\Http\Controllers\JadwalController::class, 'store'])->name('admin.jadwal_dokter.store');
Route::get('admin/jadwal_dokter/{id}/edit', [App\Http\Controllers\JadwalController::class, 'edit'])->name('admin.jadwal_dokter.edit');
Route::put('admin/jadwal_dokter/{id}', [App\Http\Controllers\JadwalController::class, 'update'])->name('admin.jadwal_dokter.update');
Route::delete('admin/jadwal_dokter/{id}', [App\Http\Controllers\JadwalController::class, 'destroy'])->name('admin.jadwal_dokter.destroy');
use App\Http\Controllers\JadwalController;

//---------------------------------------Route Web-------------------------
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('web.dashboard');

// Route untuk halaman dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('web.dashboard');

// Route untuk halaman Galeri
Route::get('/galery', function () {
    return view('web.pages.galery');
})->name('web.galery');



// Route untuk halaman Jadwal Dokter
Route::get('/jadwal', [JadwalController::class, 'frontendIndex'])->name('web.jadwal');

// Temporary route without /api prefix for debugging 404 issue
Route::get('/doctor-schedule/{id}', [JadwalController::class, 'getDoctorScheduleJSON']);


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('jadwal_dokter', [\App\Http\Controllers\JadwalController::class, 'adminIndex'])->name('jadwal_dokter.index');
    Route::get('jadwal_dokter/create', [\App\Http\Controllers\JadwalController::class, 'create'])->name('jadwal_dokter.create');
    Route::post('jadwal_dokter', [\App\Http\Controllers\JadwalController::class, 'store'])->name('jadwal_dokter.store');
    Route::get('jadwal_dokter/{id}/edit', [\App\Http\Controllers\JadwalController::class, 'edit'])->name('jadwal_dokter.edit');
    Route::put('jadwal_dokter/{id}', [\App\Http\Controllers\JadwalController::class, 'update'])->name('jadwal_dokter.update');
    Route::delete('jadwal_dokter/{id}', [\App\Http\Controllers\JadwalController::class, 'destroy'])->name('jadwal_dokter.destroy');
});

// Route untuk halaman Karir
Route::get('/karir', [App\Http\Controllers\KarirController::class, 'index'])->name('web.karir');

// Route untuk detail karir
Route::get('/karir/{id}', [App\Http\Controllers\KarirController::class, 'show'])->name('web.karir.detail');

// Route untuk halaman Layanan Medis
Route::get('/layanan_medis', function () {
    return view('web.pages.layanan_medis');
})->name('web.layanan_medis');

// Route untuk halaman Layanan Unggulan
Route::get('/layanan_unggulan', function () {
    return view('web.pages.layanan_unggulan');
})->name('web.layanan_unggulan');

// Route untuk halaman Info Bed
Route::get('/info_bed', [App\Http\Controllers\BedController::class, 'index'])->name('web.info_bed');

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

Route::get('/layanan_unggulan/hemodialisis_centre', function () {
    return view('web.pages.layanan_unggulan.hemodialisis_centre');
})->name('web.layanan_unggulan.hemodialisis_centre');

Route::get('/layanan_unggulan/gastroenterohepatology_centre', function () {
    return view('web.pages.layanan_unggulan.gastroenterohepatology_centre');
})->name('web.layanan_unggulan.gastroenterohepatology_centre');

Route::get('/layanan_unggulan/maternity_centre', function () {
    return view('web.pages.layanan_unggulan.maternity_centre');
})->name('web.layanan_unggulan.maternity_centre');

Route::get('/layanan_unggulan/physical_rehabilitation_centre', function () {
    return view('web.pages.layanan_unggulan.physical_rehabilitation_centre');
})->name('web.layanan_unggulan.physical_rehabilitation_centre');

Route::get('/layanan_unggulan/medical_check_up_(mcu)', function () {
    return view('web.pages.layanan_unggulan.mcu');
})->name('web.layanan_unggulan.medical_check_up_(mcu)');

Route::get('/layanan_unggulan/fertilisasi_in_vitro_(ivf)', function () {
    return view('web.pages.layanan_unggulan.ivf');
})->name('web.layanan_unggulan.fertilisasi_in_vitro_(ivf)');

Route::get('/layanan_unggulan/ruang_ok_(operating_room)', function () {
    return view('web.pages.layanan_unggulan.ruang_ok');
})->name('web.layanan_unggulan.ruang_ok_(operating_room)');

Route::get('/layanan_unggulan/radiodiagnostik_dan_laboratorium', function () {
    return view('web.pages.layanan_unggulan.radiodiagnostik_dan_laboratorium');
})->name('web.layanan_unggulan.radiodiagnostik_dan_laboratorium');

Route::get('/layanan_unggulan/cathlab', function () {
    return view('web.pages.layanan_unggulan.cathlab');
})->name('web.layanan_unggulan.cathlab');

// Routes untuk Layanan Medis Rawat Jalan
Route::get('/rawat-jalan/rj_tht', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_tht');
})->name('web.layanan_medis.rawat_jalan.rj_tht');

Route::get('/rawat-jalan/rj_gizi', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_gizi');
})->name('web.layanan_medis.rawat_jalan.rj_gizi');

Route::get('/rawat-jalan/rj_gigi', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_gigi');
})->name('web.layanan_medis.rawat_jalan.rj_gigi');

Route::get('/rawat-jalan/rj_obgyn', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_obgyn');
})->name('web.layanan_medis.rawat_jalan.rj_obgyn');

Route::get('/rawat-jalan/rj_anak', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_anak');
})->name('web.layanan_medis.rawat_jalan.rj_anak');

Route::get('/rawat-jalan/rj_bedah', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_bedah');
})->name('web.layanan_medis.rawat_jalan.rj_bedah');

Route::get('/rawat-jalan/rj_bedah_digestive', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_bedah_digestive');
})->name('web.layanan_medis.rawat_jalan.rj_bedah_digestive');

Route::get('/rawat-jalan/rj_saraf', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_saraf');
})->name('web.layanan_medis.rawat_jalan.rj_saraf');

Route::get('/rawat-jalan/rj_anastesi', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_anastesi');
})->name('web.layanan_medis.rawat_jalan.rj_anastesi');

Route::get('/rawat-jalan/rj_kesehatan_jiwa', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_kesehatan_jiwa');
})->name('web.layanan_medis.rawat_jalan.rj_kesehatan_jiwa');

Route::get('/rawat-jalan/rj_paru', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_paru');
})->name('web.layanan_medis.rawat_jalan.rj_paru');

Route::get('/rawat-jalan/rj_urologi', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_urologi');
})->name('web.layanan_medis.rawat_jalan.rj_urologi');

Route::get('/rawat-jalan/rj_penyakit_dalam', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_penyakit_dalam');
})->name('web.layanan_medis.rawat_jalan.rj_penyakit_dalam');

Route::get('/rawat-jalan/rj_andrologi', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_andrologi');
})->name('web.layanan_medis.rawat_jalan.rj_andrologi');

Route::get('/rawat-jalan/rj_eksekutif', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_eksekutif');
})->name('web.layanan_medis.rawat_jalan.rj_eksekutif');

Route::get('/rawat-jalan/rj_orthopedi', function () {
    return view('web.pages.layanan_medis.rawat_jalan.rj_orthopedi');
})->name('web.layanan_medis.rawat_jalan.rj_orthopedi');

// Route untuk halaman Rawat Inap
Route::get('/rawat_inap', function () {
    $beds = App\Models\Bed::all();
    return view('web.pages.rawat_inap', compact('beds'));
})->name('web.rawat_inap');

// Route untuk halaman Rawat Jalan
Route::get('/rawat-jalan', function () {
    return view('web.pages.rawat_jalan');
})->name('web.rawat_jalan');

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

// Route untuk halaman Info Bed
Route::get('/info-bed', [App\Http\Controllers\BedController::class, 'index'])->name('web.info_bed');

// Route untuk halaman Pengumuman
Route::get('/pengumuman', function () {
    return view('web.pages.pengumuman');
})->name('web.pengumuman');

// Route untuk halaman Promo
Route::get('/promo', function () {
    $promos = App\Models\Promo::where('is_active', true)->get();
    return view('web.pages.promo', compact('promos'));
})->name('web.promo');

// Route untuk halaman Mutu
Route::get('/mutu', function () {
    return view('web.pages.mutu');
})->name('web.mutu');

// Route Artikel 1
Route::get('/informasi/artikel1', function () {
    return view('web.pages.artikel.artikel1');
})->name('web.artikel.artikel1');



// Existing routes...

// Change or add route to map to JadwalController@showDoctorSchedule with route name web.dokter.show
Route::get('/dokter/{id}', [JadwalController::class, 'showDoctorSchedule'])->name('web.dokter.show');

//Route Dokter Dinamis
Route::get('/jadwal/dokter/{id}', function ($id) {
    return view('web.pages.dokter.dokter' . $id);
})->name('web.jadwal.dokter');

//Route Karir 1
Route::get('/karir/karir1', function () {
    return view('web.pages.karir.karir1');
})->name('web.karir.karir1');

//-----------------------------------------Route CMS----------------------
// CMS Routes
Route::prefix('admin-panel')->group(function () {
    // Login routes (outside middleware)
    Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('admin.logout');

    // Protected CMS routes
 
        Route::get('/cpanel', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Doctor management
        Route::get('/doctors', [App\Http\Controllers\AdminController::class, 'doctors'])->name('admin.doctors');
        Route::get('/doctors/create', [App\Http\Controllers\AdminController::class, 'createDoctor'])->name('admin.doctors.create');
        Route::post('/doctors', [App\Http\Controllers\AdminController::class, 'storeDoctor'])->name('admin.doctors.store');
        Route::get('/doctors/{id}/edit', [App\Http\Controllers\AdminController::class, 'editDoctor'])->name('admin.doctors.edit');
        Route::put('/doctors/{id}', [App\Http\Controllers\AdminController::class, 'updateDoctor'])->name('admin.doctors.update');
        Route::delete('/doctors/{id}', [App\Http\Controllers\AdminController::class, 'deleteDoctor'])->name('admin.doctors.delete');

        // Promo management
        Route::get('/promos', [App\Http\Controllers\AdminController::class, 'promos'])->name('admin.promos');
        Route::get('/promos/create', [App\Http\Controllers\AdminController::class, 'createPromo'])->name('admin.promos.create');
        Route::post('/promos', [App\Http\Controllers\AdminController::class, 'storePromo'])->name('admin.promos.store');
        Route::get('/promos/{id}/edit', [App\Http\Controllers\AdminController::class, 'editPromo'])->name('admin.promos.edit');
        Route::put('/promos/{id}', [App\Http\Controllers\AdminController::class, 'updatePromo'])->name('admin.promos.update');
        Route::delete('/promos/{id}', [App\Http\Controllers\AdminController::class, 'deletePromo'])->name('admin.promos.delete');

        // Artikel management
        Route::get('/artikels', [App\Http\Controllers\AdminController::class, 'artikels'])->name('admin.artikels');
        Route::get('/artikels/create', [App\Http\Controllers\AdminController::class, 'createArtikel'])->name('admin.artikels.create');
        Route::post('/artikels', [App\Http\Controllers\AdminController::class, 'storeArtikel'])->name('admin.artikels.store');
        Route::get('/artikels/{id}/edit', [App\Http\Controllers\AdminController::class, 'editArtikel'])->name('admin.artikels.edit');
        Route::put('/artikels/{id}', [App\Http\Controllers\AdminController::class, 'updateArtikel'])->name('admin.artikels.update');
        Route::delete('/artikels/{id}', [App\Http\Controllers\AdminController::class, 'deleteArtikel'])->name('admin.artikels.delete');

        // Karir management
        Route::get('/karirs', [App\Http\Controllers\AdminController::class, 'karirs'])->name('admin.karirs');
        Route::get('/karirs/create', [App\Http\Controllers\AdminController::class, 'createKarir'])->name('admin.karirs.create');
        Route::post('/karirs', [App\Http\Controllers\AdminController::class, 'storeKarir'])->name('admin.karirs.store');
        Route::get('/karirs/{id}/edit', [App\Http\Controllers\AdminController::class, 'editKarir'])->name('admin.karirs.edit');
        Route::put('/karirs/{id}', [App\Http\Controllers\AdminController::class, 'updateKarir'])->name('admin.karirs.update');
        Route::delete('/karirs/{id}', [App\Http\Controllers\AdminController::class, 'deleteKarir'])->name('admin.karirs.delete');

        // KritikSaran management
        Route::get('/kritik-sarans', [App\Http\Controllers\AdminController::class, 'kritikSarans'])->name('admin.kritik_sarans');
        Route::get('/kritik-sarans/{id}', [App\Http\Controllers\AdminController::class, 'showKritikSaran'])->name('admin.kritik_sarans.show');
        Route::put('/kritik-sarans/{id}/status', [App\Http\Controllers\AdminController::class, 'updateKritikSaranStatus'])->name('admin.kritik_sarans.update_status');
        Route::delete('/kritik-sarans/{id}', [App\Http\Controllers\AdminController::class, 'deleteKritikSaran'])->name('admin.kritik_sarans.delete');
    });


// Web Register Routes
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.post');
