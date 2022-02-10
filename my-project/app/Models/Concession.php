<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concession
{
    use HasFactory;

    public $concession = [];

    public function addCar($voiture){
        array_push($this->concession, $voiture);
    }

    public function getConcession(){
        return $this->concession;
    }
}
