@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-booking">
        <div class="space-headings">
            <h2>
              Book Now!  
            </h2>
            <h3>Join us, let’s have some fun!</h3>
            <div class="wrap">
                <div class="grid-card">
                    <div class="class-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M27.2133 11.2133L20.7733 4.77333C20.28 4.28 19.6 4 18.8933 4H6.66667C5.2 4 4 5.2 4 6.66667V25.3333C4 26.8 5.2 28 6.66667 28H25.3333C26.8 28 28 26.8 28 25.3333V13.1067C28 12.4 27.72 11.72 27.2133 11.2133ZM9.33333 9.33333H18.6667V12H9.33333V9.33333ZM22.6667 22.6667H9.33333V20H22.6667V22.6667ZM22.6667 17.3333H9.33333V14.6667H22.6667V17.3333Z" fill="#323232"/>
                        </svg>
                    </div>
                    <h3>Check out our upcoming camps</h3>
                    <p>Browse through the camps and check out our, <a href="/#section-camps" >upcoming camps</span></a>
                </div>
                <div class="grid-card">
                    <div class="class-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                        <path d="M13.6673 0.333334H8.33398V5.66667H13.6673V0.333334Z" fill="#323232"/>
                        <path d="M5.66732 16.3333H0.333984V21.6667H5.66732V16.3333Z" fill="#323232"/>
                        <path d="M5.66732 8.33333H0.333984V13.6667H5.66732V8.33333Z" fill="#323232"/>
                        <path d="M5.66732 0.333334H0.333984V5.66667H5.66732V0.333334Z" fill="#323232"/>
                        <path d="M13.6673 11.56V8.33333H8.33398V13.6667H11.5607L13.6673 11.56Z" fill="#323232"/>
                        <path d="M22.8406 10.0533L21.2806 8.49333C21.0673 8.28 20.7206 8.28 20.5073 8.49333L19.334 9.66667L21.6673 12L22.8406 10.8267C23.054 10.6133 23.054 10.2667 22.8406 10.0533Z" fill="#323232"/>
                        <path d="M9.66797 19.3333V21.6667H12.0013L20.8946 12.7733L18.5613 10.44L9.66797 19.3333Z" fill="#323232"/>
                        <path d="M21.6673 0.333334H16.334V5.66667H21.6673V0.333334Z" fill="#323232"/>
                        </svg>
                    </div>
                    <h3>Fill the booking form</h3>
                    <p>Our <a href="/children/create">parent's dashboard</a> makes it easier to manage multiple children</p>
                </div>
                <div class="grid-card1">
                    <div class="class-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g clip-path="url(#clip0_673_1269)">
                            <path d="M26.666 5.33333H5.33268C3.85268 5.33333 2.67935 6.52 2.67935 8L2.66602 24C2.66602 25.48 3.85268 26.6667 5.33268 26.6667H26.666C28.146 26.6667 29.3327 25.48 29.3327 24V8C29.3327 6.52 28.146 5.33333 26.666 5.33333ZM26.666 24H5.33268V16H26.666V24ZM26.666 10.6667H5.33268V8H26.666V10.6667Z" fill="#323232"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_673_1269">
                            <rect width="32" height="32" fill="white"/>
                            </clipPath>
                        </defs>
                        </svg>
                    </div>
                    <h3>Payment</h3>
                    <p>Lipa na M-Pesa, Buy Goods Till Number <span>5003075</span></p>
                </div>
            </div>
        </div>
        <div class="text-center justify-content-center align-items-center ">
        <h2 class="justify-content-center align-items-center text-center">All information collected is strictly to enhance our user experience and customer service. We do not provide any data to third party services </h2>
        @if(auth()->user())
        <a href="/client-booking/{{auth()->user()->id}}" class="text-center justify-content-center align-items-center d-flex"><h3 class="justify-content-center align-items-center text-center d-flex">Already have an account? </h3></a>
        @endif
        </div>
    </div>
    <div class="section-booking-form">
        <form action = "/booking" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="">
                <div class="row form-heading">
                    <h2>Book</h2>
                    <h4 style="margin-bottom:47px;">Fill up the Form  and ou team will get back to within 24 hrs</h4>
                </div>
                <label for="name_of_parent" class="parent-details">Parent/ Guardian’s details</label>

                <div class="row mb-4">

                    <div class="col-md-6 mb-3">
                        <input id="name_of_parent" type="text" class=" @error('name_of_parent') is-invalid @enderror" name="name_of_parent" placeholder="first name" value="{{ old('name_of_parent') }}" required autocomplete="name_of_parent" autofocus>

                        @error('name_of_parent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="last_name" type="text" class=" @error('last_name') is-invalid @enderror" name="last_name" placeholder="last name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>  
                <div class="row" style="margin-bottom:88px;">

                    <div class="col-md-6 mb-3">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="phone" type="phone" class="@error('phone') is-invalid @enderror" name="phone" placeholder="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>  
                <div class="add-child">
                    <label for="name_of_parent" >Child’s details
                    
                    </label>
                    @if(auth()->user())
                    @else 
                    <a href="/login" style="text-decoration:none;">Add child</a>
                    @endif
                </div>
                <div class="row child-wrap" style="margin-bottom:88px;margin-right:32px;">

                    <div class="col-md-4 mb-3">
                        <input id="name_of_child" type="name_of_child" class="@error('name_of_child') is-invalid @enderror" placeholder="first name" name="name_of_child" value="{{ old('name_of_child') }}" required autocomplete="name_of_child" autofocus>

                        @error('name_of_child')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <input id="child_last_name" type="child_last_name" class="@error('child_last_name') is-invalid @enderror" placeholder="last name" name="child_last_name" value="{{ old('child_last_name') }}" required autocomplete="child_last_name" autofocus>

                        @error('child_last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <input id="dob" type="text" placeholder="date of birth" class="@error('dob') is-invalid @enderror" name="dob" autocomplete="dob" autofocus>

                        @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-3">
                        <input id="school" type="school" class="@error('school') is-invalid @enderror" placeholder="school" name="school" value="{{ old('school') }}" required autocomplete="school" autofocus>

                        @error('school')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>  
                <label for="name_of_parent" class="parent-details">Booking date</label>
                <h4>Enter a date range if you plan on coming for more than 8 days</h4>


                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <input id="from" type="text" class="@error('from') is-invalid @enderror" name="from" autocomplete="from" placeholder="from" autofocus>

                        @error('from')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input id="to" type="text" class="@error('to') is-invalid @enderror" name="to" autocomplete="to" placeholder="to" autofocus>

                        @error('to')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>  
                <h4>Pick the specific days if you plan on coming on separate days</h4>

                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <input id="datepicker" type="text" placeholder="day 1" class="@error('booking_date') is-invalid @enderror" name="booking_date" autocomplete="booking_date" autofocus>

                        @error('booking_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <input id="datepicker1" type="text" placeholder="day 2" class="@error('day2') is-invalid @enderror" name="day2" autocomplete="day2" autofocus>

                        @error('day2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <input id="datepicker2" type="text" placeholder="day 3" class="@error('day3') is-invalid @enderror" name="day3" autocomplete="day3" autofocus>

                        @error('day3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <input id="datepicker3" type="text" placeholder="day 4" class="@error('day4') is-invalid @enderror" name="day4" autocomplete="day4" autofocus>

                        @error('day4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                </div> 
                <div class="row" style="margin-bottom:88px;">
                    <div class="col-md-3 mb-3">
                        <input id="datepicker4" type="text" placeholder="day 5" class="@error('day5') is-invalid @enderror" name="day5" autocomplete="day5" autofocus>

                        @error('day5')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <input id="datepicker5" type="text" placeholder="day 6" class="@error('day6') is-invalid @enderror" name="day6" autocomplete="day6" autofocus>

                        @error('day6')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <input id="datepicker6" type="text" placeholder="day 7" class="@error('day7') is-invalid @enderror" name="day7" autocomplete="day7" autofocus>

                        @error('day7')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <input id="datepicker7" type="text" placeholder="day 8" class="@error('day8') is-invalid @enderror" name="day8" autocomplete="day8" autofocus>

                        @error('day8')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                </div> 
                <label for="name_of_parent" class="parent-details">Final Part</label>
                <div class="row" style="margin-bottom:88px;">
                    <div class="col-md-6 mb-3">
                        <input id="payment" type="text" class="@error('payment') is-invalid @enderror" placeholder="payment confirmation code" name="payment" autocomplete="payment" autofocus>

                        @error('payment')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-4">
                        <input id="contact_person" type="text" class="@error('contact_person') is-invalid @enderror" name="contact_person" placeholder="name of person picking/dropping the child" autocomplete="contact_person" autofocus>

                        @error('contact_person')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <input id="allergies" type="text" class="@error('allergies') is-invalid @enderror" name="allergies" placeholder="allergies or any other additional information" autocomplete="allergies" autofocus>

                        @error('allergies')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div> 

                        
                <button class="">Add New Booking
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