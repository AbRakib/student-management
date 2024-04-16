<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'      => 'Super Admin',
            'email'     => 'admin@gmail.com',
            'phone'     => '+8801767270051',
            'address'   => 'Dhaka, Bangladesh',
            'password'  => Hash::make('123'),
            'created_at'=> now()
        ]);
    }
}
