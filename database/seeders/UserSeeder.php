<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              =>  'Tomas Carmona',
            'email'             =>  'tomas@agradaweb.com',
            'email_verified_at' => now(),
            'password'          =>  bcrypt('5162')
        ])->assignRole('SuperAdmin');

        User::create([
            'name'              =>  'Karolis Tamosaitis',
            'email'             =>  'karolis@agradaweb.com',
            'email_verified_at' => now(),
            'password'          =>  bcrypt('4563')
        ])->assignRole('SuperAdmin');
    }
}
