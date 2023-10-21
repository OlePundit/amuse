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
<div class="section-next">
    <div class="space-headings">
        <h2>What to read next</h2>
    </div>
    <div class="grid">
        @foreach($featuredBlogs as $featuredBlog)
        <div class="col-lg-4 mx-3 blog-card">
            <img src="/public/storage/{{$featuredBlog->thumbnail}}">
            <div class="feature-info">
                <div class="caption">
                    <h5>By {{$featuredBlog->author}}</h5>
                    <h6>{{$featuredBlog->category}}</h6>
                </div>
                <h5>{{$featuredBlog->title}}</h5>
                <p>{!! Str::limit(strip_tags($featuredBlog->body), 120, '...') !!}</p>
            </div>
        </div>
        @endforeach             
    </div>
</div>
@endsection


