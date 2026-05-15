<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

Route::get('/doctor-schedule/{id}', [JadwalController::class, 'getDoctorScheduleJSON']);

Route::get('/testapi', function () {
    return response()->json(['message' => 'API route working']);
});
