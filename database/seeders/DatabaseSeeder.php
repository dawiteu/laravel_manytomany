<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArticleSeeder::class, 
            TagSeeder::class,
            Arttagrel::class
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\Article::factory()->count(7)->create();
        \App\Models\Tag::factory()->count(15)->create(); 
        \App\Models\Arttagrel::factory()->count(15)->create(); 
    }
}
