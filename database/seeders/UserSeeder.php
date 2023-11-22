<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin Afgan',
            'email' => 'afgan@gmail.com',
            'password' => Hash::make('afgan123'),
            'roles' => 'ADMIN',
            'phone' => '087824140294',
        ]);
    }
}
