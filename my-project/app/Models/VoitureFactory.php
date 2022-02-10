<?php

namespace App\Models;

class VoitureFactory
{
    public static function createCar($marque){
        if($marque == "Opel" || $marque == "opel"){
            return new Opel();
        } else if ($marque == "Renault" || $marque == "renault"){
            return new Renault();
        } else {
            return "error";
        }
    }
}
