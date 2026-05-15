<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karir;

class KarirController extends Controller
{
    public function index()
    {
        $karirs = Karir::where('is_active', true)
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('web.pages.karir', compact('karirs'));
    }

    public function show($id)
    {
        $karir = Karir::where('is_active', true)->findOrFail($id);

        return view('web.pages.karir_detail', compact('karir'));
    }
}
