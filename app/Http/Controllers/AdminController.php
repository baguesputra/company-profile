<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Promo;
use App\Models\Artikel;
use App\Models\Karir;
use App\Models\KritikSaran;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('cms.cpanel');
    }

    public function doctors()
    {
        $doctors = Doctor::all();
        return view('cms.doctors.index', compact('doctors'));
    }

    public function createDoctor()
    {
        return view('cms.doctors.create');
    }

    public function storeDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'poli' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable|boolean',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/dokter'), $imageName);

        Doctor::create([
            'name' => $request->name,
            'poli' => $request->poli,
            'image' => $imageName,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('admin.doctors')->with('success', 'Dokter berhasil ditambahkan.');
    }

    public function editDoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('cms.doctors.edit', compact('doctor'));
    }

    public function updateDoctor(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'poli' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable|boolean',
        ]);

        $doctor = Doctor::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/dokter'), $imageName);
            $doctor->image = $imageName;
        }

        $doctor->name = $request->name;
        $doctor->poli = $request->poli;
        $doctor->status = $request->status ?? 0;
        $doctor->save();

        return redirect()->route('admin.doctors')->with('success', 'Dokter berhasil diperbarui.');
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('admin.doctors')->with('success', 'Dokter berhasil dihapus.');
    }

    // Promo management
    public function promos()
    {
        $promos = Promo::all();
        return view('cms.promos.index', compact('promos'));
    }

    public function createPromo()
    {
        return view('cms.promos.create');
    }

    public function storePromo(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'valid_until' => 'required|date',
            'is_active' => 'boolean'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/promo/'), $imageName);
        }

        Promo::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'price' => $request->price,
            'valid_until' => $request->valid_until,
            'is_active' => $request->is_active ?? true,
        ]);

        return redirect()->route('admin.promos')->with('success', 'Promo berhasil ditambahkan.');
    }

    public function editPromo($id)
    {
        $promo = Promo::findOrFail($id);
        return view('cms.promos.edit', compact('promo'));
    }

    public function updatePromo(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8048',
            'price' => 'required|numeric',
            'valid_until' => 'required|date',
            'is_active' => 'boolean'
        ]);

        $promo = Promo::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/promo/'), $imageName);
            $promo->image = $imageName;
        }

        $promo->update($request->only(['title', 'description', 'price', 'valid_until', 'is_active']));

        return redirect()->route('admin.promos')->with('success', 'Promo berhasil diperbarui.');
    }

    public function deletePromo($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->route('admin.promos')->with('success', 'Promo berhasil dihapus.');
    }

    // Artikel management
    public function artikels()
    {
        $artikels = Artikel::all();
        return view('cms.artikels.index', compact('artikels'));
    }

    public function createArtikel()
    {
        return view('cms.artikels.create');
    }

    public function storeArtikel(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_date' => 'required|date',
            'is_active' => 'boolean'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Artikel::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'image' => $imageName,
            'published_date' => $request->published_date,
            'is_active' => $request->is_active ?? true,
        ]);

        return redirect()->route('admin.artikels')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function editArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('cms.artikels.edit', compact('artikel'));
    }

    public function updateArtikel(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_date' => 'required|date',
            'is_active' => 'boolean'
        ]);

        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $artikel->image = $imageName;
        }

        $artikel->update($request->only(['title', 'description', 'content', 'published_date', 'is_active']));

        return redirect()->route('admin.artikels')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function deleteArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('admin.artikels')->with('success', 'Artikel berhasil dihapus.');
    }

    // Karir management
    public function karirs()
    {
        $karirs = Karir::all();
        return view('cms.karirs.index', compact('karirs'));
    }

    public function createKarir()
    {
        return view('cms.karirs.create');
    }

    public function storeKarir(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'requirements' => 'required|string',
            'responsibilities' => 'required|string',
            'application_deadline' => 'required|date',
            'is_active' => 'boolean'
        ]);

        Karir::create($request->all());

        return redirect()->route('admin.karirs')->with('success', 'Karir berhasil ditambahkan.');
    }

    public function editKarir($id)
    {
        $karir = Karir::findOrFail($id);
        return view('cms.karirs.edit', compact('karir'));
    }

    public function updateKarir(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'requirements' => 'required|string',
            'responsibilities' => 'required|string',
            'application_deadline' => 'required|date',
            'is_active' => 'boolean'
        ]);

        $karir = Karir::findOrFail($id);
        $karir->update($request->all());

        return redirect()->route('admin.karirs')->with('success', 'Karir berhasil diperbarui.');
    }

    public function deleteKarir($id)
    {
        $karir = Karir::findOrFail($id);
        $karir->delete();

        return redirect()->route('admin.karirs')->with('success', 'Karir berhasil dihapus.');
    }

    // KritikSaran management
    public function kritikSarans()
    {
        $kritikSarans = KritikSaran::all();
        return view('cms.kritik_sarans.index', compact('kritikSarans'));
    }

    public function showKritikSaran($id)
    {
        $kritikSaran = KritikSaran::findOrFail($id);
        return view('cms.kritik_sarans.show', compact('kritikSaran'));
    }

    public function updateKritikSaranStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,dibaca,ditanggapi',
        ]);

        $kritikSaran = KritikSaran::findOrFail($id);
        $kritikSaran->status = $request->status;
        $kritikSaran->save();

        return redirect()->route('admin.kritik_sarans')->with('success', 'Status kritik dan saran berhasil diperbarui.');
    }

    public function deleteKritikSaran($id)
    {
        $kritikSaran = KritikSaran::findOrFail($id);
        $kritikSaran->delete();

        return redirect()->route('admin.kritik_sarans')->with('success', 'Kritik dan saran berhasil dihapus.');
    }
}
