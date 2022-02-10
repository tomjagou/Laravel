<?php

namespace App\Models;

class Observeur
{
    public $count = 0;

    public function display(){
        return $this->count . ' notification(s)';
    }

    public function update(){
        $this->count++;
    }

}
