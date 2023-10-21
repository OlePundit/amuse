@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section-edit">
        <div class="space-headings">
            <h2>Edit Profile</h2>
        </div>
        <form action = "/profile/{{$user->id}}" enctype="multipart/form-data" method="post" style="    display: flex;
        width: 1022px;
        padding: var(--spacing-0-rem,  0px);
        flex-direction: column;
        align-items: flex-start;
        gap: 47px;
        border-radius: var(--border-radius-2,  16px);">
        @csrf
        @method('PATCH')
            <div class="row" style="width: 1022px;">
    
                <div class="row mb-4">
                    <div class="col-md-12">
                        <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your phone number..." name="phone" required autocomplete="phone" autofocus>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>       
                            
        
                            


                <div class="row">
                    <label for="image">Profile Image</label> 

                    <div class="col-md-6">
                
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                                
                @error('image')
                
                <strong>{{ $message }}</strong>
                    
                @enderror
                </div>

                            
                <div class="row pt-4">
                    <button class="col-2" style="    display: flex;
    padding: var(--spacing-1-rem,  8px) var(--grid-gap-main,  16px);
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
    line-height: 130%">Save Profile</button>
                </div>
        

            </div>

        </form>
    </div>
</div>
@endsection