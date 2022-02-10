<?php

namespace App\Http\Controllers;

use App\Models\VoitureFactory;
use Illuminate\Http\Request;

class voitureFactoryController extends Controller
{
    public function index(){
        return view('voitureFactory');
    }

    public function showVoiture($marque){
        $voiture = VoitureFactory::createCar($marque);
        return view('voitureFactory', ['voiture' => get_class($voiture)]);
    }
}
