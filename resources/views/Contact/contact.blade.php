@extends('layouts.app')

@section('content')
<div class="section-contact">
    <div class="contact-left">
        <div class="question">
            <h2>Have a Question ?
                Get in Touch with us. 
            </h2>
            <h3>Fill up the Form  and ou team will get back to within 24 hrs</h3>
            <form action="/store-contact" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <input type="text" name="first-name" class="firstname" placeholder="first name">

                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="last-name" class="lastname" placeholder="last name">

                    </div>
                </div>
               
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <input type="email" name="email" class="email" placeholder="email">

                    </div>                
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea name="message" class="message" placeholder="message"></textarea>

                    </div>                
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="contact-right">
        <img class="contact-img" src="/storage/image2.png" style="margin-top:205px;">

    </div>
</div>
<div class="section-map">
    <div>
        <div class="map">
            <iframe
            width="600"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key=API_KEY
                &q=Space+Needle,Seattle+WA">
            </iframe>
        </div>
    </div>
</div>
@endsection
