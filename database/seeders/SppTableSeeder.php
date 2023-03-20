<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Spp;

class SppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spp::create([
            'tahun' => '2023',
            'nominal' => '200000',
        ]);

        Spp::create([
            'tahun' => '2023',
            'nominal' => '100000',
        ]);
    }
}
