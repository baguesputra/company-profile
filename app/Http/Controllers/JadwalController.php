<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\JadwalDokter;

class JadwalController extends Controller
{
    // Frontend: Show doctors with status 1 to the web jadwal page
    public function frontendIndex()
    {
        $doctors = Doctor::where('status', 1)->get();
        return view('web.pages.jadwal', compact('doctors'));
    }

    // Frontend: Show a specific doctor's schedule on public site
    public function showDoctorSchedule($id)
    {
        $doctor = Doctor::with('jadwal')->findOrFail($id);
        return view('web.pages.dokter.dokter1', compact('doctor'));
    }

    // API: Return doctor's schedule data as JSON
    public function getDoctorScheduleJSON($id)
    {
        $doctor = Doctor::with('jadwal')->find($id);
        if (!$doctor) {
            return response()->json(['error' => 'Doctor not found'], 404);
        }

        $jadwal = $doctor->jadwal->first(); // Assuming one schedule per doctor

        $schedule = [
            'FMJHari01' => $jadwal->FMJHari01 ?? '',
            'FMJHari02' => $jadwal->FMJHari02 ?? '',
            'FMJHari03' => $jadwal->FMJHari03 ?? '',
            'FMJHari04' => $jadwal->FMJHari04 ?? '',
            'FMJHari05' => $jadwal->FMJHari05 ?? '',
            'FMJHari06' => $jadwal->FMJHari06 ?? '',
            'FMJHari07' => $jadwal->FMJHari07 ?? '',
        ];

        return response()->json([
            'doctor' => $doctor->name,
            'poli' => $doctor->poli,
            'image' => $doctor->image,
            'whatsapp' => $doctor->link,
            'schedule' => $schedule
        ]);
    }

    // CMS: Display list of schedules
    public function adminIndex()
    {
        $jadwalDokters = JadwalDokter::with('doctor')->get();
        return view('cms.jadwal_dokter.index', compact('jadwalDokters'));
    }

    // CMS: Show form to create a new schedule
    public function create()
    {
        $doctors = Doctor::where('status', 1)->get();
        return view('cms.jadwal_dokter.create', compact('doctors'));
    }

    // CMS: Store new schedule in db
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required|string|max:50',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        JadwalDokter::create([
            'doctor_id' => $request->doctor_id,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('admin.jadwal_dokter.index')->with('success', 'Jadwal dokter berhasil ditambahkan.');
    }

    // CMS: Show form to edit existing schedule
    public function edit($id)
    {
        $jadwalDokter = JadwalDokter::findOrFail($id);
        $doctors = Doctor::where('status', 1)->get();
        return view('cms.jadwal_dokter.edit', compact('jadwalDokter', 'doctors'));
    }

    // CMS: Update schedule in db
    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required|string|max:50',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        $jadwalDokter = JadwalDokter::findOrFail($id);
        $jadwalDokter->update([
            'doctor_id' => $request->doctor_id,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('admin.jadwal_dokter.index')->with('success', 'Jadwal dokter berhasil diperbarui.');
    }

    // CMS: Delete schedule from db
    public function destroy($id)
    {
        $jadwalDokter = JadwalDokter::findOrFail($id);
        $jadwalDokter->delete();

        return redirect()->route('admin.jadwal_dokter.index')->with('success', 'Jadwal dokter berhasil dihapus.');
    }
}
