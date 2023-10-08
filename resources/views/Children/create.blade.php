@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="justify-content-center align-items-center text-center">All information collected is strictly to enhance our user experience and customer service. We do not provide any data to third party services </h2>

    <form action = "/children" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row text-center">
                <h2>Add new child</h2>
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
                <label for="allergies" class="col-md-4 col-form-label text-md-end">Allergies that the child has or any other additional information</label> 

                <div class="col-md-6">
            
                <textarea class="form-control" id="allergies" name="allergies"></textarea>

                </div>
                

            </div>
                    
        <div class="row pt-4">
            <button class="btn btn-primary text-white">Add New Post</button>
        </div>


        </div>
    </div>

    </form>
</div>
@endsection