<?php

namespace App\Models;

class Sujet
{
    public $observeurs = [];

    public function notify(){
        foreach($this->observeurs as $observeur){
            $observeur->update();
        }
    }

    public function addObs($observeur){
        array_push($this->observeurs, $observeur);
    }

    public function removeObs($observeur){
        unset($this->observeurs, $observeur);
    }
}
