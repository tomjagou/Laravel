<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opel extends Voiture
{
    private $places;
    private $marque;
    private $vitesse;
    private $prix;
    
    public function getPlaces(){ return $this->places; }
    public function getMarque(){ return $this->marque; }
    public function getVitesse(){ return $this->vitesse; }
    public function getPrix(){ return $this->prix; }

    public function __construct()
    {
        $this->roues = 4;
        $this->places = 5;
        $this->marque = "Opel";
        $this->vitesse = "158";
        $this->prix = "17000";
    }
}
