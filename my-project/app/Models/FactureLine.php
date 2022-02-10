<?php

namespace App\Models;

class FactureLine
{
    private $voiture;

    public function __construct($voiture){
        $this->voiture = $voiture;
        echo $this->$voiture->getMarque();
    }
}
