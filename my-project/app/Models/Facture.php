<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture
{
    public $prix;
    public $voitures = [];

    public function addCar($voiture){
        $this->prix += $voiture->getPrix();
        array_push($this->voitures, $voiture);
    }

    public function getCars(){
        return $this->voitures;
    }

    public function getPrice(){
        return $this->prix;
    }
}
