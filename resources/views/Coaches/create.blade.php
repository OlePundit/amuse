@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="section-booking-form">
        <form action = "/reports" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="">
                <div class="row form-heading">
                    <h2 class="mb-4">Create Report</h2>
                </div>
                  
                <label for="name_of_parent" class="parent-details">Booking date</label>
                <h4>Enter a date range if you plan on coming for more than 8 days</h4>


                <div class="row mb-4" style="margin-bottom:88px;">
                    <div class="col-md-4 mb-3">
                        <input id="date" type="text" class="@error('date') is-invalid @enderror" name="date" autocomplete="date" placeholder="date" autofocus>

                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-3">
                        <select id="start" class="@error('start') is-invalid @enderror" name="start" placeholder="start time" >       
                            <option value="">Start</option>             
                            <option value="1">1:00</option>
                            <option value="2">2:00</option>
                            <option value="3">3:00</option>
                            <option value="4">4:00</option>
                            <option value="5">5:00</option>
                            <option value="6">6:00</option>
                            <option value="7">7:00</option>
                            <option value="8">8:00</option>
                            <option value="9"> 9:00</option>
                            <option value="10">10:00</option>
                            <option value="11">11:00</option>
                            <option value="12">12:00</option>
                        </select>   

                        @error('start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-3">
                        <select id="start_am" class="@error('start_am') is-invalid @enderror" name="start_am" placeholder="start_am " >                    
                            <option value="am">A.M</option>
                            <option value="pm">P.M</option>
               


                        </select>   

                        @error('start_am')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2 mb-3">
                        <select id="end" class="@error('end') is-invalid @enderror" name="end" placeholder="end time" >       
                            <option value="">end</option>             
                            <option value="1">1:00</option>
                            <option value="2">2:00</option>
                            <option value="3">3:00</option>
                            <option value="4">4:00</option>
                            <option value="5">5:00</option>
                            <option value="6">6:00</option>
                            <option value="7">7:00</option>
                            <option value="8">8:00</option>
                            <option value="9"> 9:00</option>
                            <option value="10">10:00</option>
                            <option value="11">11:00</option>
                            <option value="12">12:00</option>
                        </select>   

                        @error('end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <select id="end_am" class="@error('end_am') is-invalid @enderror" name="end_am" placeholder="end_am " >                    
                            <option value="am">A.M</option>
                            <option value="pm">P.M</option>
               


                        </select>   

                        @error('finish_am')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                </div>  
                
                
                
                <label for="name_of_parent" class="parent-details">Final Part</label>
                <div class="row" style="margin-bottom:88px;">
                    <div class="col-md-6 mb-4">
                        <input id="coach_name" type="text" class="@error('coach_name') is-invalid @enderror" placeholder="Enter your full name" name="coach_name" autocomplete="coach_name" autofocus>

                        @error('coach_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <select id="camp_name" class="col-md-6 @error('camp_name') is-invalid @enderror mb-4" name="camp_name">       
                        <option value="">Camp name</option>

                        @foreach($camps as $camp)
                         <option value="{{$camp->title}}">{{$camp->title}}</option>
                         @endforeach

                    </select> 
                    <div class="col-md-12 mb-4">
                        <input id="remarks" type="text" class="@error('remarks') is-invalid @enderror" name="remarks" placeholder="remarks" autocomplete="remarks" autofocus>

                        @error('remarks')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <input id="challenges" type="text" class="@error('challenges') is-invalid @enderror" name="challenges" placeholder="challenges" autocomplete="challenges" autofocus>

                        @error('challenges')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div> 

                        
                <button class="">Add Report
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <mask id="mask0_683_83" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_683_83)">
                        <path d="M16.175 13H4V11H16.175L10.575 5.4L12 4L20 12L12 20L10.575 18.6L16.175 13Z" fill="#1C260D"/>
                    </g>
                    </svg>
                </button>


            </div>
        </div>

        </form>
    </div>

    
</div>
@endsection