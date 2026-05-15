<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bed;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beds = [
            // Room 101
            ['room_number' => '101', 'bed_number' => 'A1', 'status' => 'available', 'description' => 'Bed A1 di Ruang 101'],
            ['room_number' => '101', 'bed_number' => 'A2', 'status' => 'available', 'description' => 'Bed A2 di Ruang 101'],
            ['room_number' => '101', 'bed_number' => 'B1', 'status' => 'occupied', 'description' => 'Bed B1 di Ruang 101'],
            ['room_number' => '101', 'bed_number' => 'B2', 'status' => 'available', 'description' => 'Bed B2 di Ruang 101'],

            // Room 102
            ['room_number' => '102', 'bed_number' => 'A1', 'status' => 'available', 'description' => 'Bed A1 di Ruang 102'],
            ['room_number' => '102', 'bed_number' => 'A2', 'status' => 'maintenance', 'description' => 'Bed A2 di Ruang 102 - Dalam perbaikan'],
            ['room_number' => '102', 'bed_number' => 'B1', 'status' => 'available', 'description' => 'Bed B1 di Ruang 102'],
            ['room_number' => '102', 'bed_number' => 'B2', 'status' => 'occupied', 'description' => 'Bed B2 di Ruang 102'],

            // Room 201
            ['room_number' => '201', 'bed_number' => 'A1', 'status' => 'available', 'description' => 'Bed A1 di Ruang 201'],
            ['room_number' => '201', 'bed_number' => 'A2', 'status' => 'available', 'description' => 'Bed A2 di Ruang 201'],
            ['room_number' => '201', 'bed_number' => 'B1', 'status' => 'available', 'description' => 'Bed B1 di Ruang 201'],
            ['room_number' => '201', 'bed_number' => 'B2', 'status' => 'available', 'description' => 'Bed B2 di Ruang 201'],

            // Room 202
            ['room_number' => '202', 'bed_number' => 'A1', 'status' => 'occupied', 'description' => 'Bed A1 di Ruang 202'],
            ['room_number' => '202', 'bed_number' => 'A2', 'status' => 'available', 'description' => 'Bed A2 di Ruang 202'],
            ['room_number' => '202', 'bed_number' => 'B1', 'status' => 'maintenance', 'description' => 'Bed B1 di Ruang 202 - Dalam perbaikan'],
            ['room_number' => '202', 'bed_number' => 'B2', 'status' => 'available', 'description' => 'Bed B2 di Ruang 202'],

            // Room 301
            ['room_number' => '301', 'bed_number' => 'A1', 'status' => 'available', 'description' => 'Bed A1 di Ruang 301'],
            ['room_number' => '301', 'bed_number' => 'A2', 'status' => 'available', 'description' => 'Bed A2 di Ruang 301'],
            ['room_number' => '301', 'bed_number' => 'B1', 'status' => 'available', 'description' => 'Bed B1 di Ruang 301'],
            ['room_number' => '301', 'bed_number' => 'B2', 'status' => 'available', 'description' => 'Bed B2 di Ruang 301'],
        ];

        foreach ($beds as $bed) {
            Bed::create($bed);
        }
    }
}
