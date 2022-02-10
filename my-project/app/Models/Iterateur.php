<?php

namespace App\Models;

class Iterateur
{
    public $count = 0;
    public $concession;

    public function __construct($concession){
        $this->concession = $concession;
    }

    public function hasNext(){
        return isset($this->concession[$this->count]);
    }

    public function next(){
        return $this->concession[$this->count++];
    }
}
