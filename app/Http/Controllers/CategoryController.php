<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = $request->validate([
            'name'=> 'required',
        ]);

        Category::create($category);
        return redirect('/categories');
    }

    public function show(Category $category)
    {
        // $category = Category::with('questions.answers')->get();
        return view('categories.show', [
            'category' => $category
        ]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $updatedCategory = $request->validate([
            'name'=> 'required',
        ]);

        $category->update($updatedCategory);

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}
