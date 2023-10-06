@extends('layouts.app')

@section('content')
<div class="section-contact">
    <div class="contact-left">
        <div class="question">
            <h2>Have a Question ?
                Get in Touch with us 👋
            </h2>
            <h3>Fill up the Form  and ou team will get back to within 24 hrs</h3>
            <form>
                <div class="">
                    <input type="text" name="first-name" class="firstname">
                </div>
                <div class="">
                    <input type="text" name="last-name" class="lastname">
                </div>
                <div class="">
                    <input type="email" name="email" class="email">
                </div>
                <div class="">
                    <textarea name="message" class="message"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="contact-right">
        <img class="contact-img" src="/storage/contact.png">
        <img class="contact-img1" src="/storage/contact.png">

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
