<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singleton;

class SingletonController extends Controller
{
    public function index(){
        $this->singleton();
        return view('singleton');
    }

    public function singleton(){
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('singleton', ['a' => $a, 'b' => $b, 'count' => Singleton::getCount()]);
    }
}
