<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'id' => '1',
            'nama_barang' => 'Beras',
            'harga_barang' => '12000',
            'jumlah_barang' => '1000',
            'img' => 'beras.png'
        ], [
            'id' => '2',
            'nama_barang' => 'Minyak',
            'harga_barang' => '25000',
            'jumlah_barang' => '1000',
            'img' => 'minyak.png'
        ], [
            'id' => '3',
            'nama_barang' => 'Gula',
            'harga_barang' => '15000',
            'jumlah_barang' => '1000',
            'img' => 'gula.png'
        ], [
            'id' => '4',
            'nama_barang' => 'Garam',
            'harga_barang' => '5000',
            'jumlah_barang' => '1000',
            'img' => 'garam.png'
        ], [
            'id' => '5',
            'nama_barang' => 'Telur',
            'harga_barang' => '25000',
            'jumlah_barang' => '1000',
            'img' => 'teluar.png'
        ],);
    }
}
