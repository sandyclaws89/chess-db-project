<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // up serve per creare la struttura della tabella
    public function up()
    {

        // questa parte me l'ha creata laravel perche ho usato il codice create_nometabella_table
        Schema::create('matches', function (Blueprint $table) {
            // questo crea già la colonna id (con default autoincrement)
            $table->id();
            // questo invece crea le due colonne CREATE AT e UPDATE AT, se non lo vogliamo basta toglierlo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // down fa undo praticamente, quindi se ho sbagliato ad inizializzare una colonna(tipo di dato, nome) scrivo qui quello che voglio modificare
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
