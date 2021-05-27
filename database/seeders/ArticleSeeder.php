<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                "titre"         => "titre du premier projet", 
                "description"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. possimus neque sint accusamus?",
                "created_at"    => now()
            ], 
            [
                "titre"         => "Projet numéro 2", 
                "description"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam tempora rerum repudiandae animi culpa a aliquid atque, illo ducimus cupiditate eius possimus neque sint accusamus?",
                "created_at"    => now()
            ],
            [
                "titre"         => "3 Projets :) ", 
                "description"   => "Lorem iping elit. Magnam tempora rerum repudiandae animi culpa a aliquid atque, illo ducimus cupiditate eius possimus neque sint accusamus?",
                "created_at"    => now()
            ], 
        ]);
    }
}
