<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Beverage;

class WaveCafe extends Controller
{
    public function menu()
    {
        $title = 'Drink Menu';
        $specialCategoryId = Category::where('name', 'Special Items')->first()->id;
        $categories = Category::with(['beverages' => function ($query) {
            $query->where('published', true)
                  ->where('special', false);
        }])
        ->where('id', '!=', $specialCategoryId)
        ->get();
    
        return view('menu', compact('categories', 'title'));
    }

    public function aboutUs()
    {
        $title = 'About Us';
        return view('aboutUs', compact('title'));
    }

    public function specialItems()
    {
        $title = 'Special Items';
        $specialItems = Beverage::where('special', true)->get();
        return view('specialItems', compact('specialItems', 'title'));
    }

    public function contactUs()
    {
        $title = 'Contact Us';
        return view('contactUs', compact('title'));
    }
}