<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Promosi;
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
            'password' => Hash::make('admin123'),
            'role' => 0
        ]);

        Kategori::create([
            'nama' => 'Putihan',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan1',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan2',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan3',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan4',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan5',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);

        Produk::create([
            'nama' => 'Sapi Putihan6',
            'harga' => '10000000',
            'kategori' => 'Putihan',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);

        Promosi::create([
            'nama' => 'Sapi Putihan1',
            'hargasebelum' => '10000000',
            'hargasesudah' => '9000000',
            'kategori' => 'Putihan',
            'diskon' => '10',
            'deskripsi' => 'Ini sapi',
            'foto' => 'sapi.jpg',
        ]);
    }
}
