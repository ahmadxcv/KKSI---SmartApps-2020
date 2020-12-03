<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Guru',
            'email' => 'guru@guru.com',
            'password' => Hash::make('password'),
            'role' => 'guru'
        ]);
        DB::table('users')->insert([
            'name' => 'Siswa',
            'email' => 'siswa@siswa.com',
            'password' => Hash::make('password'),
            'role' => 'siswa'
        ]);

        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 25; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => Hash::make('password'),
                'role' => 'guru',
                'created_at' => Carbon::now()
            ]);
        }
        for ($i = 1; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => Hash::make('password'),
                'role' => 'siswa',
                'created_at' => Carbon::now()
            ]);
        }
    }
}
