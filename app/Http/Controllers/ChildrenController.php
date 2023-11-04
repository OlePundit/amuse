<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;

class ChildrenController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('Children.create');
    }
    public function store()
    {
        $data=request()->validate([
            'name_of_child'=>'',
            'child_last_name'=>'',
            'school'=>'',
            'dob'=>'',
            'allergies'=>''
        ]);

        auth()->user()->children()->create([
            'name_of_child'=>$data['name_of_child'],
            'child_last_name'=>$data['child_last_name'],
            'school'=>$data['school'],
            'dob'=>$data['dob'],
            'allergies'=>$data['allergies']
        ]);
        return redirect('/profile/' . auth()->user()->id);
       
    }
}
