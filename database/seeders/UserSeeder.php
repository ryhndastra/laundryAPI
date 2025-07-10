<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
        [
            'username' => 'nopal',
            'email' => 'nopal@gmail.com',
            'password' => Hash::make('nopalganyang'),
        ],
        [
            'username' => 'pian',
            'email' => 'pian@gmail.com',
            'password' => Hash::make('pianmalabar'),
        ],
        [
            'username' => 'susu',
            'email' => 'susu@gmail.com',
            'password' => Hash::make('susu'),
        ],
    ];

    foreach ($users as $user) {
        User::create($user);
    }
    }
}
