<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->content = $request->get('content');
        $blog->category_id = $request->get('category_id');
        $blog->save();
        
        return redirect()->route('blogs.index');
    }

    public function show($id)
    {
        $blog = Blog::with('category')->find($id);

        // dd($blog->category->name);

        return view('blogs.show', compact('blog'));
    }

    public function index()
    {
        $blogs = Blog::all();

        return view('blogs.index', compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->content = $request->get('content');
        $blog->category_id = $request->get('category_id');
        $blog->save();
        
        return redirect()->route('blogs.index');
    }

    public function destroy(Request $request)
    {
        $blog = Blog::find($request->get('id'));
        $blog->delete();

        return redirect()->route('blogs.index');
    }
}
