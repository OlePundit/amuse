@extends('layouts.app')

@section('content')
<div class="section-blog-content">
    <div class="space-headings">
        <div class="d-flex align-items-center">
            <img src="/storage/profile/person-circle.svg" style="margin-right:12px;margin-top:0px;padding-top:0px;">
            <h3 style="margin-right:24px;">{{$slug->author}}</h3>
            <h4>{{$slug->created_at}}</h4>
        </div>
        <div class="title">{{$slug->title}}</div>
    </div>
    <img src='/public/storage/{{$slug->thumbnail}}' class="thumbnail" style="margin-bottom:48px;">
    <div class="body">{!!$slug->body!!}</div>

</div>

@endsection
