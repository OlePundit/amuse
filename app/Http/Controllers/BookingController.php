<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Children;


class BookingController extends Controller
{
    public function create()
    {
        return view('Booking.create');
    }
    public function client(User $user)
    {
        $childrens = Children::where('user_id', auth()->user()->id)->get();
        return view('Booking.client',compact('user','childrens'));
    } 
    public function store()
    {

        try{
            $data = request()->validate([
                'name_of_parent'=>'',
                'name_of_child'=>'',
                'email'=>'',
                'phone'=>'',
                'school'=>'',
                'dob'=>'',
                'booking_date'=>'',
                'payment'=>'',
                'contact_person'=>'',
                'allergies'=>'',
                'last_name'=>'',
                'child_last_name'=>'',
                'from'=>'',
                'to'=>'',
                'day2'=>'',
                'day3'=>'',
                'day4'=>'',
                'day5'=>'',
                'day6'=>'',
                'day7'=>'',
                'day8'=>''
            ]);
            $data = new Booking([
                'name_of_parent'=>$data['name_of_parent'],
                'name_of_child'=>$data['name_of_child'],
                'email'=>$data['email'],
                'phone'=>$data['phone'],
                'school'=>$data['school'],
                'dob'=>$data['dob'],
                'booking_date'=>$data['booking_date'],
                'payment'=>$data['payment'],
                'contact_person'=>$data['contact_person'],
                'allergies'=>$data['allergies'],
                'last_name'=>$data['last_name'],
                'child_last_name'=>$data['child_last_name'],
                'from'=>$data['from'],
                'to'=>$data['to'],
                'day2'=>$data['day2'],
                'day3'=>$data['day3'],
                'day4'=>$data['day4'],
                'day5'=>$data['day5'],
                'day6'=>$data['day6'],
                'day7'=>$data['day7'],
                'day8'=>$data['day8']
            ]);

            $data->save();
            return redirect('/');
        } catch (\Exception $e) {
            // Handle the exception here
            dd($e->getMessage()); // Display the error message for debugging purposes
            // You can also log the exception or show a specific error page
        }
        
    }
    public function clientStore()
    {
        try {
            $data = request()->validate([
                'name_of_parent' => '',
                'name_of_child' => '',
                'email' => '',
                'phone' => '',
                'school' => '',
                'dob' => '',
                'booking_date' => '',
                'payment' => '',
                'contact_person' => '',
                'allergies' => '',
                'last_name'=>'',
                'child_last_name'=>'',
                'from'=>'',
                'to'=>'',
                'day2'=>'',
                'day3'=>'',
                'day4'=>'',
                'day5'=>'',
                'day6'=>'',
                'day7'=>'',
                'day8'=>''
            ]);

            $parent = auth()->user()->name;
            $email = auth()->user()->email;
            $phone = auth()->user()->phone;
            $childIds = $data['name_of_child'];
            $bookingData = [];

            foreach ($childIds as $childId) {
                $child = Children::find($childId);

                if ($child) {
                    $bookingData[] = [
                        'name_of_parent' => $parent,
                        'name_of_child' => $child->name_of_child,
                        'email' => $email,
                        'phone' => $phone,
                        'school' => $child->school,
                        'dob' => $child->dob,
                        'booking_date' => $data['booking_date'],
                        'payment' => $data['payment'],
                        'contact_person' => $data['contact_person'],
                        'allergies' => $child->allergies,
                        'created_at' => now(),
                        'last_name'=>$parent,
                        'child_last_name'=>$child->child_last_name,
                        'from'=>$data['from'],
                        'to'=>$data['to'],
                        'day2'=>$data['day2'],
                        'day3'=>$data['day3'],
                        'day4'=>$data['day4'],
                        'day5'=>$data['day5'],
                        'day6'=>$data['day6'],
                        'day7'=>$data['day7'],
                        'day8'=>$data['day8']
                    ];
                }
            }

            // Create separate booking instances for each child
            Booking::insert($bookingData);

            return redirect('/');
        } catch (\Exception $e) {
            // Handle the exception here
            dd($e->getMessage()); // Display the error message for debugging purposes
            // You can also log the exception or show a specific error page
        }
    }

}
