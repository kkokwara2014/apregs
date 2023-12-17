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
        User::create([
            'role_id' => '1',
            'name' => 'K. K. Okwara',
            'email' => 'kkokwara2014@gmail.com',
            'phone' => '08038883919',
            'password' => bcrypt('kkokwara'),
        ]);
    }
}
