@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Profile</h1>
            </div>
            <div class="row mb-4">
                <label for="phone" class="col-md-4 col-form-label text-md-end">Phone number</label>

                <div class="col-md-6">
                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->profile->phone}}" required autocomplete="phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>       
                        
    
                        


            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Profile Image</label> 

                <div class="col-md-6">
            
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                            
            @error('image')
            
             <strong>{{ $message }}</strong>
                
             @enderror
            </div>

                        
            <div class="row pt-4">
                <button class="btn btn-warning text-white">Save Profile</button>
            </div>
    

            </div>
        </div>

        </form>
</div>
@endsection