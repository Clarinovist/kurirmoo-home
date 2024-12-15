<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_kontak')->insert([
            [
                'alamat' => 'Surakarta',
                'no_hp' => '62895341043230',
                'instagram' => null,
                'youtube' => null,
                'email' => null,
                'playstore' => null,
                'created_at' =>now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
