@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="justify-content-center align-items-center text-center">All information collected is strictly to enhance our user experience and customer service. We do not provide any data to third party services </h2>
<a href="/client-booking"><h3 class="justify-content-center align-items-center text-center">Already have an account? </h3></a>

    <form action = "/new-client-booking" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row text-center">
                <h2>Create booking</h2>
            </div>
            
            <div class="row mb-4">
                <label for="booking_date" class="col-md-4 col-form-label text-md-end">Booking date</label> 

                <div class="col-md-6">
            
                <input type="date" class="form-control" id="booking_date" name="booking_date" multiple>

                </div>
                

            </div>
            <div class="row mb-4">
                <label for="children" class="col-md-4 col-form-label text-md-end">Select the children who will be in attendance</label>
                <div class="col-md-6">
                    @foreach($childrens as $children)
                    <div>
                    <span class="mx-2">{{$children->name_of_child}}</span><input type="checkbox" value="{{$children->id}}" class="" id="children" name="name_of_child[]" multiple>

                    </div>
                    @endforeach
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


          
                    
        <div class="row pt-4">
            <button class="btn btn-primary text-white">Add New Booking</button>
        </div>


        </div>
    </div>

    </form>
</div>
@endsection