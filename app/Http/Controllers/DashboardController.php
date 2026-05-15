<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class DashboardController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('is_active', true)
                          ->orderBy('published_date', 'desc')
                          ->limit(3)
                          ->get();

        return view('web.pages.dashboard', compact('artikels'));
    }
}
