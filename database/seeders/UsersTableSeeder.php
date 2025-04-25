<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('secret');
        $user->role = 'admin';
        $user->save();

        $user1 = new User;
        $user1->name = 'user';
        $user1->email = 'user@gmail.com';
        $user1->password = bcrypt('secret');
        $user1->role = 'user';
        $user1->save();
    }
}
