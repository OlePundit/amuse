@extends('layouts.app')

@section('content')
<div class="container">
<div class="section-profile">
<h2 class="justify-content-center align-items-center text-center">You are the only one who can see this page</h2>

<div class="d-flex flex-row justify-content-center">
    <div class="col-lg-4 col-md-6 col-xs-6 pt-5">
        
        <div class="d-flex align-items-center pb-3">
            <strong> Welcome {{ $user->name}} </strong>
           
        </div>
       
        
        <div class="d-flex">
            
            @can ('update', $user->profile)
        
            <a href="/children/create" class="link mt-2"><button type="button" style="background:none;border:none;">Add children</button></a>

            @endcan  
            
            @can ('update', $user->profile)
            
            <a href="/profile/{{$user->id}}/edit" class="link mx-3 mt-2">
            <button type="button" style="background:none;border:none;" class="">Edit Profile</button>
            </a>
            @endcan  
        
        </div>

          
    </div>
    <div class="col-lg-3 col-md-4 col-xs-4 p-5">
        <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:80%;">    
    </div>
</div>
<div class="row pt-5">
@php
$childNumber = 1; // Initialize the child number counter
@endphp
    @foreach($user->children as $children)
    <div class="col-3 pb-4">
        <h2>Child {{ $childNumber }}: {{$children->name_of_child}}</h2>
    </div>    
    @php
    $childNumber++; // Increment the child number counter
    @endphp 
    @endforeach
</div>
</div>


        
</div>
@endsection