<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soals')->insert([
            'judul' => 'Umum',
            'pertanyaan' => 'Apa ibu kota Portugal?',
            'level' => 'mudah',
            'poin' => 10,
            'user_id' => '2',
            'created_at' => Carbon::now()
        ]);
        DB::table('soals')->insert([
            'judul' => 'Biologi',
            'pertanyaan' => 'Berapa banyak nafas yang diambil tubuh manusia setiap hari?',
            'level' => 'sedang',
            'poin' => 20,
            'user_id' => '2',
            'created_at' => Carbon::now()
        ]);
        DB::table('soals')->insert([
            'judul' => 'Sejarah',
            'pertanyaan' => 'Siapakah Perdana Menteri Inggris dari tahun 1841 hingga 1846?',
            'level' => 'sedang',
            'poin' => 20,
            'user_id' => '2',
            'created_at' => Carbon::now()
        ]);
        DB::table('soals')->insert([
            'judul' => 'Kimia',
            'pertanyaan' => 'Apa simbol kimia untuk perak?',
            'level' => 'mudah',
            'poin' => 10,
            'user_id' => '2',
            'created_at' => Carbon::now()
        ]);
        DB::table('soals')->insert([
            'judul' => 'Umum',
            'pertanyaan' => 'Apa bonekanya, nama lengkap Barbie?',
            'level' => 'sedang',
            'poin' => 20,
            'user_id' => '2',
            'created_at' => Carbon::now()
        ]);
    }
}
