<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upcoming;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $upcomings = Upcoming::all();
        return view('home', compact('upcomings'));
    }
}
