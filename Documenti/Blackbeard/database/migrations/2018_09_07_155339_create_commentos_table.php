<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentos', function (Blueprint $table) {
            $table->increments('id');
            // Colonna data
            $table->dateTime('date');

            //colonna per il nome
            $table->string('name')->default(false);

            // Colonna descrizione
            $table->string('description', 255);
            
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
        Schema::dropIfExists('commentos');
    }
}
