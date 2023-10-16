<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;


class CampsController extends Controller
{
    public function show(Camp $slug)
    {
        return view('Camp.show',compact('slug'));
    }
}
