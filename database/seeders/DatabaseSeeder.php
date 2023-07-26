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
    }
}
