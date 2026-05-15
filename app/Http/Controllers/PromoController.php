<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::where('is_active', true)
                      ->where('valid_until', '>=', now())
                      ->orderBy('created_at', 'asc')
                      ->get();

        return view('web.pages.promo', compact('promos'));
    }
}
