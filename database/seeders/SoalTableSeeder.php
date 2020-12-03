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
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 100; $i++) {
            DB::table('soals')->insert([
                'judul' => $faker->title,
                'pertanyaan' => $faker->word,
                'level' => 'sedang',
                'poin' => 20,
                'user_id' => $faker->randomDigit,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
