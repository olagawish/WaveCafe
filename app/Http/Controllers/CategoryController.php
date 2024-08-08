<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Categories';
        $categories = Category::all();
        return view('dashboard.categories', compact('categories', 'title'));
    }

    public function create()
    {
        $title = 'Add Categories';
        return view('dashboard.addCategory', compact('title'));
    }

    public function store(Request $request)
    {
        $messages = $this->errMsg();
        $validated = $request->validate([
            'categoryName' => 'required|string|max:255',
        ], $messages);

        Category::create($validated);
        return redirect()->route('dashboard.categories')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $title = 'Edit Categories';
        $category = Category::findOrFail($id);
        return view('dashboard.editCategory', compact('category', 'title'));
    }

    public function update(Request $request, string $id)
    {
        $messages = $this->errMsg();
        $categories = Category::findOrFail($id);
    
        $validated = $request->validate([
            'categoryName' => 'required|string|max:255',
        ], $messages);
    
        $categories->update($data);
        return redirect()->route('dashboard.categories')->with('success', 'Category updated successfully.');
    }

    public function destroy(Request $request)
    {
        $categories = Category::findOrFail($request->id);
        if ($categories->beverages()->count() > 0) {
            return redirect()->route('dashboard.categories')->with('error', 'Category cannot be deleted because it has associated beverages.');
        }
        $categories->delete();

        return redirect()->route('dashboard.categories')->with('success', 'Category deleted successfully.');
    }


    public function errMsg(){
        return [
            'name.required' => "The Category's name is missing, Please insert it.",
        ];
    }

}
