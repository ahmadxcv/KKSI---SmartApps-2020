<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    }
}
