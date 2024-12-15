<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_about_us')->insert([
            [
                'judul' => 'Kurirmoo',
                'desc' => 'Menjadi perusahaan logistik digital terdepan di Indonesia yang berkomitmen untuk mentransformasi bisnis melalui solusi logistik yang cepat, transparan, dan berteknologi tinggi memberikan kemudahan bagi setiap bisnis untuk berkembang dengan dukungan layanan logistik yang dapat diandalkan dan inovatif.',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
