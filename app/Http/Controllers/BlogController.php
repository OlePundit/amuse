<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog()
    {
        return view('Blog.blog');
    }
    public function show(Blog $blog)
    {
        return view('Blog.show',compact('blog'));
    }
}
