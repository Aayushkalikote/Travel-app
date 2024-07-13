<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'phone_number' => '9845646116',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);
        $user = User::create([
            'name' => 'Traveler',
            'username' => 'traaveler',
            'phone_number' => '9845646116',
            'email' => 'traveler@mail.com',
            'password' => 'password',
        ]);
        $user->save();
    }
}
