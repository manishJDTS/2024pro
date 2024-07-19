<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        $blogPosts = Blog::all(); // Fetch all blog posts
        return view('blogs', compact('blogPosts'));
    }

     public function b_create(){
        return view('create');
     }

    public function store(Request $request)
    {
        // Validate and store blog post data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Adjust image validation rules
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Create blog post
        Blog::create($validatedData);

        return redirect()->route('blogs')->with('success', 'Blog post created successfully');
    }


}
