<?php

namespace Database\Seeders;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            Product::create([
                'id' => '1',
                'nama_barang' => 'Beras',
                'harga_barang' => '12000',
                'jumlah_barang' => '1000',
                'img' => 'beras.png'
            ]);
            Product::create([
                'id' => '2',
            'nama_barang' => 'Minyak',
            'harga_barang' => '25000',
            'jumlah_barang' => '1000',
            'img' => 'minyak.png'
            ]);
            Product::create([
                'id' => '3',
                'nama_barang' => 'Gula',
                'harga_barang' => '15000',
                'jumlah_barang' => '1000',
                'img' => 'gula.png'
            ]);
            Product::create([
                'id' => '4',
            'nama_barang' => 'Garam',
            'harga_barang' => '5000',
            'jumlah_barang' => '1000',
            'img' => 'garam.png'
            ]);
            Product::create([
                'id' => '5',
            'nama_barang' => 'Telur',
            'harga_barang' => '25000',
            'jumlah_barang' => '1000',
            'img' => 'teluar.png'
            ]);
            Product::create([
                'id' => '6',
            'nama_barang' => 'Kecap',
            'harga_barang' => '1000',
            'jumlah_barang' => '1000',
            'img' => 'kecap.png'
            ]);
            Product::create([
                'id' => '7',
            'nama_barang' => 'Sapu',
            'harga_barang' => '15000',
            'jumlah_barang' => '100',
            'img' => 'sapu.png'
            ]);
            Product::create([
                'id' => '8',
            'nama_barang' => 'wajan',
            'harga_barang' => '99000',
            'jumlah_barang' => '50',
            'img' => 'wajan.png'
            ]);
            Product::create([
                'id' => '9',
            'nama_barang' => 'Ember',
            'harga_barang' => '10000',
            'jumlah_barang' => '250',
            'img' => 'ember.png'
            ]);
            Product::create([
                'id' => '7',
            'nama_barang' => 'Pengepel Lantai',
            'harga_barang' => '30000',
            'jumlah_barang' => '150',
            'img' => 'pellantai.png'
            ]);
    }
}
