<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();
        $firstBlog = Blog::inRandomOrder()->limit(1)->first();
        $featuredBlogs = Blog::inRandomOrder()->limit(3)->get();
        return view('Blog.blog',compact('blogs','featuredBlogs','firstBlog'));
    }
    public function show(Blog $slug)
    {
        $featuredBlogs = Blog::inRandomOrder()->limit(3)->get();
        return view('Blog.show',compact('slug','featuredBlogs'));
    }
}
