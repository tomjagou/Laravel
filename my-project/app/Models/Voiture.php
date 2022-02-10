<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Voiture
{
    public $roues = 4;

    abstract function getPlaces();
    abstract function getMarque();
    abstract function getVitesse();
    abstract function getPrix();
    
    public function getRoues(){
        return $this->roues;
    }
}
