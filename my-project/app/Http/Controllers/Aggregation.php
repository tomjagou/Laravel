<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concession;
use App\Models\Facture;
use App\Models\VoitureFactory;
use App\Models\Iterateur;


class Aggregation extends Controller
{
    static public function index(){

        $concession = new Concession();
        $factory = new VoitureFactory();
        $opel = $factory->createCar('opel');
        $renault = $factory->createCar('renault');
        $concession->addCar($opel);
        $concession->addCar($renault);
        $facture = new Facture();
        $facture->addCar($opel);
        $facture->addCar($renault);

        $iterateur = new Iterateur($concession->getConcession());
        return view('aggregation', ['iterateur' => $iterateur]);
    }
}
