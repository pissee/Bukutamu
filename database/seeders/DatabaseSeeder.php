<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'apisdhiya@gmail.com',
            'password' => Hash::make('indonesia'),
            'level' => 'admin'
        ]);

        \App\Models\User::create([
            'name' => 'Petugas',
            'username' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('indonesia'),
            'level' => 'petugas'
        ]);

    }
}