<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function cold()
    {
        return view('drink.cold', ['title' => 'Cold Drinks']);
    }

    public function hot()
    {
        return view('drink.hot', ['title' => 'Hot Drinks']);
    }

    public function juice()
    {
        return view('drink.juice', ['title' => 'Fruit Juices']);
    }
}