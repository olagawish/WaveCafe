<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.addCategory');
    }

    public function store(Request $request)
    {
    $validated =  $request->validate([
        'addcategory' => 'required|string|max:255',
    ]);

    Category::create([
        'addcategory' => $request->input('addcategory'),
    ]);

    return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }


    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit', compact('categories'));
    }


    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

}
