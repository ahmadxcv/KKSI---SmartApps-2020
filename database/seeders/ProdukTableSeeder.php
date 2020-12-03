<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'nama_barang' => 'Buku',
            'jumlah_barang' => 10,
            'harga_barang' => 100,
            'deskripsi' => '',
            'gambar' => '1.jpg',
            'created_at' => Carbon::now()
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Buku',
            'jumlah_barang' => 10,
            'harga_barang' => 100,
            'deskripsi' => '',
            'gambar' => '2.jpg',
            'created_at' => Carbon::now()
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Buku',
            'jumlah_barang' => 10,
            'harga_barang' => 100,
            'deskripsi' => '',
            'gambar' => '3.jpg',
            'created_at' => Carbon::now()
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Buku',
            'jumlah_barang' => 10,
            'harga_barang' => 100,
            'deskripsi' => '',
            'gambar' => '4.jpg',
            'created_at' => Carbon::now()
        ]);
    }
}
