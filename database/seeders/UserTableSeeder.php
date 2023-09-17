<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Full Name',
                'email' => 'admin@rentcar.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => \bcrypt('password'),
                'is_admin' => true
            ],
            [
                'name' => 'User Full Name',
                'email' => 'user@rentcar.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => \bcrypt('password'),
                'is_admin' => false
            ],
        ];

        User::insert($users);
    }
}
