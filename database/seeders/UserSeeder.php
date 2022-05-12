<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => 'Moha',
            'last_name' => 'Okrich',
            'phone' => '678258000',
            'email' => 'moha@edatta.com',
            'password' => bcrypt('moha')
        ];

        User::insert($users);
    }
}
