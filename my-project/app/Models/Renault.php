<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renault extends Voiture
{
    private $places;
    private $marque;
    private $vitesse;
    private $prix;
    
    public function getPlaces(){ return $this->places; }
    public function getMarque(){ return $this->marque; }
    public function getVitesse(){ return $this->vitesse; }
    public function getPrix(){ return $this->prix; }

    public function __construct(){
        $this->places = 5;
        $this->marque = "Renault";
        $this->vitesse = "110";
        $this->prix = "4800";
    }
}
