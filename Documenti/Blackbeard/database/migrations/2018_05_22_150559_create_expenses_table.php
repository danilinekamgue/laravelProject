<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            // ID della mia riga
            $table->increments('id');
            
            // Colonna data
            $table->dateTime('date');
            
            // Colonna totale
            $table->float('amount', 8, 2);	

            //colonna per il nome
            $table->string('name')->default(false);

            // Colonna descrizione
            $table->string('description', 255);

            // colonne created_at e updated_at 
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
        Schema::dropIfExists('expenses');
    }
}
