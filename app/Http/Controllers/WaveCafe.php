<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaveCafe extends Controller
{
    public function home()
    {
        return view('home', ['title' => 'WaveCafe']);
    }

    public function drinkMenu()
    {
        return view('drinkMenu', ['title' => 'Drink Menu']);
    }

    public function aboutUs()
    {
        return view('aboutUs', ['title' => 'About Us']);
    }

    public function specialItems()
    {
        return view('specialItems', ['title' => 'Special Items']);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contact']);
    }
}