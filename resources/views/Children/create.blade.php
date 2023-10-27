@extends('layouts.app')

@section('content')
<div class="container">
<div class="section-children">
<div class="space-headings">
    <h2>Add new child</h2>
    <h3 class="">All information collected is strictly to enhance our user experience and customer service. We do not provide any data to third party services </h3>

</div>

<form action = "/children" enctype="multipart/form-data" method="post">
@csrf
<div class="row">
    <div class="">
        
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
                <input id="dob" type="date" class="@error('dob') is-invalid @enderror" placeholder="date of birth" name="dob" value="" required autocomplete="dob" autofocus>

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
        <div class="row mb-4">

            <div class="col-md-12">
        
            <textarea class="form-control" id="allergies" name="allergies" placeholder="allergies or any other additional information"></textarea>

            </div>
            

        </div>
                
   
        <button class="" style="    display: flex;
    padding: var(--spacing-1-rem,  16px) var(--grid-gap-main,  32px);
    justify-content: center;
    align-items: center;
    gap: var(--spacing-075-rem,  12px);
    border-radius: var(--border-radius-4,  99999px);
    border: 2px solid var(--button-mode-primary-bg-1-border,  #71C850);
    background: var(--button-mode-primary-bg-1,  #71C850);
    color: var(--button-mode-primary-font-color-1,  #1C260D);
    font-family: Montserrat;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: 130%;
    margin-bottom:20px;">Add New Child</button>


    </div>
</div>

</form>
</div>
</div>
@endsection