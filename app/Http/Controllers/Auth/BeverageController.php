<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beverage;
use App\Models\Category;

class BeverageController extends Controller
{
    public function index()
    {
        $beverages = Beverage::all();
        return view('beverages.index', compact('beverages'));
    }

    public function create()
    {
        return view('beverages.addBeverage');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'price' => 'required|numeric',
            'published' => 'sometimes|boolean',
            'special' => 'sometimes|boolean',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required|exists:categories,id'
        ]);

        $beverage = new Beverage($validated);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $beverage->image = $imagePath;
        }
        $beverage->save();

        return redirect()->route('beverages.index')->with('success', 'Beverage added successfully');
    }
}
