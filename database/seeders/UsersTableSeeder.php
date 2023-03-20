<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'petugas',
        ]);

        User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa',
        ]);

        User::create([
            'name' => 'zaky',
            'email' => 'zaky@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa',
        ]);
        User::create([
            'name' => 'bambang',
            'email' => 'bambang@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'siswa',
        ]);

    }
}
