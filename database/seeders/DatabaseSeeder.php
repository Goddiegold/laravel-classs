<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Nine;
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

        Nine::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Nine::factory()->create([
            'name' => 'Black Man',
            'email' => 'godwin@gmail.com',
            // 'password'=>bcrypt('12345')
            // 'password'=>Hash::make('12345')
            'password'=>'12345'
        ]);
    }
}
