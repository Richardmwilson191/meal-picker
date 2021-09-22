<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $user = [
        [
            'name' => 'student',
            'role' => 'student',
            'email' => 'student@email.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password'
        ],
        [
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@email.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password'
        ]
    ];

    public function run()
    {
        foreach ($this->user as $user) {
            User::create($user);
        }
    }
}
