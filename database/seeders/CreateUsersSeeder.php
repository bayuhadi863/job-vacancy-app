<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('123456768'),
                'role' => 'admin',
            ],
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'password' => Hash::make('123456768'),
                'role' => 'pelamar',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
