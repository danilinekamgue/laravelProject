<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesToExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // In un certo senso vado a "riaprire" la definizione della tabella 'expenses'
        Schema::table('expenses', function (Blueprint $table) {
            // Aggiuno un campo 'category_id'
            $table->integer('category_id')
                    ->unsigned()
                    ->default(1);   // Assegno un valore di default

            // Creo la chiave esterna sul campo category_id "leggandola" 
            // al campo 'id' della tabella 'categories'
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
