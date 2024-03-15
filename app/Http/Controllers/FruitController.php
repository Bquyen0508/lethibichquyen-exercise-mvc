<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;


class FruitController extends Controller
{
    public function getFruits()
    {
        $fruits = Fruit::all();
        //return "I have no fruits !";
        return view('fruits', compact('fruits')); 
    }
}
