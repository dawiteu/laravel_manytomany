<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                "nom" => "société", 
                "created_at" => now()
            ],
            [
                "nom" => "automobile", 
                "created_at" => now()
            ],
            [
                "nom" => "web développement", 
                "created_at" => now()
            ],
            [
                "nom" => "nouveautés", 
                "created_at" => now()
            ]
        ]);
    }
}
