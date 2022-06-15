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
            [
                'name' => 'Moha',
                'last_name' => 'Okrich',
                'password' => bcrypt('moha'),
                'phone' => '678258000',
                'email' => 'moha@edatta.com',
                'is_admin' => false,
            ],
            [
                'name' => 'Mohadmin',
                'last_name' => 'Okrich',
                'password' => bcrypt('moha'),
                'phone' => '678258010',
                'email' => 'mohadmin@edatta.com',
                'is_admin' => true,
            ],
            [
                'name' => 'Raul',
                'last_name' => 'gONZALEZ',
                'password' => bcrypt('raul'),
                'phone' => '678258010',
                'email' => 'raul@edatta.com',
                'is_admin' => false,
            ],
        ];

        User::insert($users);
    }
}
