<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class champion extends Model
{

    // Questo serve a togliere dal default del DB created at ed Update a (sono le due colonne che laravel mette di default, ovvero data e ora di creazione e di ultima modifica), bisogna praticamente sempre toglierlo perché all'inserimento di ogni nuovo dato da errori(se non inseriamo noi le due colonne, ma accade quasi mai questo)
    public $timestamps = false;
}
