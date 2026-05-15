<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info_bed;
use App\Models\Used_bed;

class BedController extends Controller
{
    public function index()
    {
        $infoBeds = Info_bed::all();
        $usedBeds = Used_bed::all()->keyBy(function ($item) {
            return $item->nama . '-' . $item->sub_nama;
        });

        $beds = $infoBeds->map(function ($bed) use ($usedBeds) {
            $key = $bed->nama . '-' . $bed->sub_nama;
            $used = $usedBeds->get($key);
            $bed->jumlah_total = $bed->jumlah;
            $bed->jumlah_used = $used ? $used->jumlah : 0;
            $bed->jumlah_tersedia = $bed->jumlah_total - $bed->jumlah_used;
            return $bed;
        });

        return view('web.pages.info_bed', compact('beds'));
    }
}
