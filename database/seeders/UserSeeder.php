<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'pras',
            'email'=>'pras@gmail.com',
            'password'=>bcrypt('password')
        ]);
        User::create([
            'name'=>'rizki',
            'email'=>'rizki@gmail.com',
            'password'=>bcrypt('password')
        ]);
        User::create([
            'name'=>'adin',
            'email'=>'adin@gmail.com',
            'password'=>bcrypt('password')
        ]);
    }
}
