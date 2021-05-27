<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArttagrelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                // (( articles_tags )) 
        Schema::create('arttagrel', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('article_id');
            //$table->foreign('article_id')->references('id')->on('articles'); 
            
            $table->foreignId('article_id')->constrained('articles'); 

            $table->foreignId('tag_id')->constrained('tags'); 

            //$table->unsignedBigInteger('tag_id');
            //$table->foreign('tag_id')->references('id')->on('tags'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arttagrel');
    }
}
