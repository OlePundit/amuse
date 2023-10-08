<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('Contact.contact');
    }
    public function store()
    {
        try{
            $data = request()->validate([
                'first-name'=>'',
                'last-name'=>'',
                'email'=>'',
                'message'=>'',
            ]);
            $data = new Contact([
                'first-name'=>$data['first-name'],
                'last-name'=>$data['last-name'],
                'email'=>$data['email'],
                'message'=>$data['message'],
            ]);
            $data->save();
            return redirect('/contact');
        }catch (\Exception $e) {
            // Handle the exception here
            dd($e->getMessage()); // Display the error message for debugging purposes
            // You can also log the exception or show a specific error page
        }
       
    }
}
