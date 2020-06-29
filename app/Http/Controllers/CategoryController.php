<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        // $category = Category::where('id', $id)->get();
        // $category = Category::where('id', $id)->first();
        $category = Category::with('blogs')->find($id);

        return view('categories.show', compact('category'));
    }

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();
        
        return redirect()->route('categories.index');
    }

    public function destroy(Request $request)
    {
        $category = Category::find($request->get('id'));
        $category->delete();

        return redirect()->route('categories.index');
    }
}
