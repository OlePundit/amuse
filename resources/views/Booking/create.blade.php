@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="justify-content-center align-items-center text-center">All information collected is strictly to enhance our user experience and customer service. We do not provide any data to third party services </h2>
@if(auth()->user())
<a href="/client-booking/{{auth()->user()->id}}"><h3 class="justify-content-center align-items-center text-center">Already have an account? </h3></a>
@endif
    <form action = "/booking" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row text-center">
                <h2>Add new child</h2>
            </div>
            <div class="row mb-4">
                <label for="name_of_parent" class="col-md-4 col-form-label text-md-end">Name of parent</label>

                <div class="col-md-6">
                    <input id="name_of_parent" type="text" class="form-control @error('name_of_parent') is-invalid @enderror" name="name_of_parent" value="{{ old('name_of_parent') }}" required autocomplete="name_of_parent" autofocus>

                    @error('name_of_parent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  
            <div class="row mb-4">
                <label for="name_of_child" class="col-md-4 col-form-label text-md-end">Name of Child</label>

                <div class="col-md-6">
                    <input id="name_of_child" type="text" class="form-control @error('name_of_child') is-invalid @enderror" name="name_of_child" value="{{ old('name_of_child') }}" required autocomplete="name_of_child" autofocus>

                    @error('name_of_child')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  
            <div class="row mb-4">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  
            <div class="row mb-4">
                <label for="phone" class="col-md-4 col-form-label text-md-end">Enter your phone number</label>

                <div class="col-md-6">
                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  
            <div class="row mb-4">
                <label for="school" class="col-md-4 col-form-label text-md-end">What school do they attend? (optional)</label>

                <div class="col-md-6">
                    <input id="school" type="text" class="form-control @error('name_of_chid') is-invalid @enderror" name="school" value="{{ old('school') }}" autocomplete="school" autofocus>

                    @error('school')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  

            <div class="row mb-4">
                <label for="dob" class="col-md-4 col-form-label text-md-end">Date of birth of the child</label> 

                <div class="col-md-6">
            
                <input type="date" class="form-control" id="dob" name="dob">

                </div>
                

            </div>
            <div class="row mb-4">
                <label for="booking_date" class="col-md-4 col-form-label text-md-end">Booking date</label> 

                <div class="col-md-6">
            
                <input type="date" class="form-control" id="booking_date" name="booking_date" multiple>

                </div>
                

            </div>
            <div class="row mb-4">
                <label for="payment" class="col-md-4 col-form-label text-md-end">Payment confirmation</label>

                <div class="col-md-6">
                    <input id="payment" type="text" class="form-control @error('payment') is-invalid @enderror" name="payment" value="{{ old('payment') }}" autocomplete="payment" autofocus>

                    @error('payment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  
            <div class="row mb-4">
                <label for="contact_person" class="col-md-4 col-form-label text-md-end">Name of person picking or dropping the child</label>

                <div class="col-md-6">
                    <input id="contact_person" type="text" class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" value="{{ old('contact_person') }}" autocomplete="contact_person" autofocus>

                    @error('contact_person')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>  


            <div class="row mb-4">
                <label for="allergies" class="col-md-4 col-form-label text-md-end">Allergies that the child has or any other additional information</label> 

                <div class="col-md-6">
            
                <textarea class="form-control" id="allergies" name="allergies"></textarea>

                </div>
                

            </div>
                    
        <div class="row pt-4">
            <button class="btn btn-primary text-white">Add New Booking</button>
        </div>


        </div>
    </div>

    </form>
</div>
@endsection