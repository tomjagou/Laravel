<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singleton extends Model
{
    use HasFactory;

    public static $instance = null;
    public static $count = 0;

    public function index(){

    }

    public static function getInstance(){
        if (self::$instance === null){
           self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getCount(){
        return self::$count;
    }

    public function incrementCount(){
        return $this->count++;
    }
}
