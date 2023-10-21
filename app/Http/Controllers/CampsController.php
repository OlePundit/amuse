<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;


class CampsController extends Controller
{

    public function show(Camp $slug)
    {
        $featuredBlogs = Camp::inRandomOrder()->limit(3)->get();

        return view('Camp.show',compact('slug','featuredBlogs'));
    }
}
