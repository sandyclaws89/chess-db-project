<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\champion;

class ChampionController extends Controller
{
    public function index() {

        // Questo è il pezzo di codice per inserire un dato da codice. Ricordarsi di inserire nel model public $timestamps = false; per togliere il default di CREATED AT e UPDATE AT. Di solito questa cosa comunque viene acquisita con un form e si controlla con un if, anche perché cosi facendo ad ogni refresh me ne aggiunge uno
            // $myChamp = new champion();
            // $myChamp->name = 'Simone Tartaglia';
            // $myChamp->age = 33;
            // $myChamp->nationality = 'Italy';
            // $myChamp->period = 2;
            // $myChamp->active = 1;
            // $myChamp->description = 'lorem ipsum';
            // $myChamp->img = 'immagine';
            // $myChamp->save();

        $champList = champion::all();

        // Questo è un esempio generico con delle condizioni nella richiesta del DB, come si scrive il codice lo torvo sulla documentazione di laravel
        // $champList = champion::where('period', 2)
        //                         ->get();
        // dd($champList);
        $data = [
            'name'      =>$champList,
        ];

    return view('/partials.home', $data);
    }
}
