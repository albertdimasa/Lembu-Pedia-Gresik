<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        User::create([
            'nama' => 'Admin',
            'username' => 'Admin',
            'password' => Hash::make('Halim123'),
            'role' => 0
        ]);

        Kategori::create([
            'nama' => 'Putihan',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan #1',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => './img/sapi.jpg',
        ]);
    }
}
