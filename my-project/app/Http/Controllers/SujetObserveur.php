<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sujet;
use App\Models\Observeur;


class SujetObserveur extends Controller
{
    public function index(){
        $observeur1 = new Observeur();
        $observeur2 = new Observeur();
        $sujet = new Sujet();
        $sujet->addObs($observeur1);
        $sujet->addObs($observeur2);
        return view('sujetObserveur', ['sujet' => $sujet]);
    }
}
