<?php

// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        $categories = Category::pluck('name')->all();

        return view('categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('books.list')
            ->with('success', 'Categoría creada exitosamente.');
    }
    public function preloadCategories()
    {
        $categories = [
            ['name' => 'Fiction'],
            ['name' => 'Non-Fiction'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }

        return redirect()->route('home');
    }
}
