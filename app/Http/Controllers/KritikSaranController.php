<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KritikSaranController extends Controller
{
    public function index()
    {
        return view('web.pages.kritik_saran');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'nullable|string|max:20',
            'kritik' => 'nullable|string|max:1000',
            'saran' => 'nullable|string|max:1000',
            'jenis' => 'required|in:kritik,saran,keduanya',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        KritikSaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'kritik' => $request->kritik,
            'saran' => $request->saran,
            'jenis' => $request->jenis,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Terima kasih atas kritik dan saran Anda. Kami akan segera memprosesnya.');
    }
}
