<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
// tabla pibot: la resultante de una relacion muchos a muchos, se crea con el nombre de ambas tablas relacionadas en singular. Articles & Tags
        Schema::create('article_tag',function(Blueprint $table){
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('tag_id')->unsigned();

             $table->foreign('article_id')->references('id')->on('articles');
             $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('tags');
    }
}


