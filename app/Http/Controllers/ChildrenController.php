<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;

class ChildrenController extends Controller
{
    public function create()
    {
        return view('Children.create');
    }
    public function store()
    {
        $data=request()->validate([
            'name_of_child'=>'',
            'school'=>'',
            'dob'=>'',
            'allergies'=>''
        ]);

        auth()->user()->children()->create([
            'name_of_child'=>$data['name_of_child'],
            'school'=>$data['school'],
            'dob'=>$data['dob'],
            'allergies'=>$data['allergies']
        ]);
        return redirect('/profile/' . auth()->user()->id);
       
    }
}
