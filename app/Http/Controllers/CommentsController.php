<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Blog;



class CommentsController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'comments' => 'required',
            'blog_id' => 'required'
        ]);


        

        auth()->user()->comments()->create([
            'comments' => $data['comments'],
            'blog_id' =>  $data['blog_id'],
        ]);

        return redirect()->back();

    }
}
