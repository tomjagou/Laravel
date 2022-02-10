<?php

namespace App\Http\Controllers;

use App\Models\Concession;
use App\Models\Facture;
use App\Models\VoitureFactory;
use Illuminate\Http\Request;

class Facade extends Controller
{
    static public function commander(){
        $concession = new Concession();
        $factory = new VoitureFactory();
        $opel = $factory->createCar('opel');
        $renault = $factory->createCar('renault');
        $concession->addCar($opel);
        $concession->addCar($renault);
        $facture = new Facture();
        $facture->addCar($opel);
        $facture->addCar($renault);
        return view('facade', ['usine' => get_class($factory),'concession' => get_class($concession), 'facture' => get_class($facture)]);
    }
}
