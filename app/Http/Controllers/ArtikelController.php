<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('is_active', true)
                          ->orderBy('published_date', 'desc')
                          ->paginate(6);

        return view('web.pages.informasi', compact('artikels'));
    }

    public function show($id)
    {
        $artikel = Artikel::where('is_active', true)->findOrFail($id);

        // Get related articles (excluding current one)
        $relatedArtikels = Artikel::where('is_active', true)
                                 ->where('id', '!=', $id)
                                 ->orderBy('published_date', 'desc')
                                 ->limit(3)
                                 ->get();

        return view('web.pages.artikel_detail', compact('artikel', 'relatedArtikels'));
    }

    public function dashboard()
    {
        $artikels = Artikel::where('is_active', true)->latest()->take(5)->get();
        return view('web.pages.dashboard', compact('artikels'));
    }
}
