<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();
        $featuredBlogs = Blog::limit(3)->get();
        return view('Blog.blog',compact('blogs','featuredBlogs'));
    }
    public function show(Blog $slug)
    {
        $featuredBlogs = Blog::limit(3)->get();
        return view('Blog.show',compact('slug','featuredBlogs'));
    }
}
