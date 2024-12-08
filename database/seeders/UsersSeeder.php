<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'name' => 'Kurirmoo',
                'email' => 'admin@kurirmoo.com',
                'username' => 'kurirmoo',
                'password' => Hash::make('kurirmoo123'),
                'role' => 'Admin',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
