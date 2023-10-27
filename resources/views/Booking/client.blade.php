@extends('layouts.app')

@section('content')
<div class="container">
<div class="section-client-booking">
    <div class="space-headings">
        <h2 class="mt-4">Create booking</h2>
        <h3>All information collected is strictly to enhance our user experience and customer service. We do not provide any data to third party services </h3>
        <a href="/client-booking">Already have an account? </a>

    </div>

    <form action = "/new-client-booking" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="">
            <div class="row text-center">
                
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-sm-12 mb-3">
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
            
  
            <div class="row mb-4" style="margin-bottom:88px;">
                <label for="children" class="">Select the children who will be in attendance</label>
                <div class="col-md-12" style="margin-bottom:88px;">
                    @foreach($childrens as $children)
                    <div>
                    <span class="mx-2">{{$children->name_of_child}}</span><input type="checkbox" value="{{$children->id}}" class="" id="children" name="name_of_child[]" multiple>

                    </div>
                    @endforeach
                </div>
            </div> 
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

            </div> 
         
                    
            <button class="mb-4" style="    display: flex;
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
    line-height: 130%">Add New Booking</button>


        </div>
    </div>

    </form>
</div>
</div>
@endsection