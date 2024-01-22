<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Akib Siddiki',
            'email' => 'akib.siddiki@gmail.com',
            'password' => Hash::make('789456123'),
            'is_admin' => true,
        ]);
    }
}
