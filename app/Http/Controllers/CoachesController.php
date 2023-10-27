<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;

class CoachesController extends Controller
{
    public function index()
    {
        return view('Coaches.index');
    }
    
    public function create()
    {
        $camps = Camp::all();
        return view('Coaches.create', compact('camps'));
    }
    public function store()
    {
        try {
        $data = request()->validate([
            'challenges'=>'',
            'remarks'=>'',
            'coach_name'=>'',
            'camp_name'=>'',
            'start'=>'',
            'date'=>'',
            'end'=>'',
            'start_am'=>'',
            'end_am'=>'',
        ]);
        auth()->user()->reports()->create([
            'challenges'=>$data['challenges'],
            'remarks'=>$data['remarks'],
            'coach_name'=>$data['coach_name'],
            'camp_name'=>$data['camp_name'],
            'start'=>$data['start'],
            'date'=>$data['date'],
            'end'=>$data['end'],
            'start_am'=>$data['start_am'],
            'end_am'=>$data['start_am']
        ]);
        return redirect('/coach_dashboard');
    } catch (\Exception $e) {
        // Handle the exception here
        dd($e->getMessage()); // Display the error message for debugging purposes
        // You can also log the exception or show a specific error page
    }

    }
}
