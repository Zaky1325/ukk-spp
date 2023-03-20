<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'nama_kelas' => 'RPL XII-1',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        Kelas::create([
            'nama_kelas' => 'RPL XII-2',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        Kelas::create([
            'nama_kelas' => 'RPL XII-3',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        Kelas::create([
            'nama_kelas' => 'RPL XII-4',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);

        Kelas::create([
            'nama_kelas' => 'RPL XII-5',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
        ]);
    }
}
