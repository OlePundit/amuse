@extends('layouts.app')

@section('content')
<div class="section-blog-content">
    <div class="space-headings">
        <div class="d-flex">
            <img src="/storage/Author.png" style="margin-right:12px;">
            <h3 style="margin-right:24px;">Andrew Jonson</h3>
            <h4>Posted on 27th January 2021</h4>
        </div>
        <div class="title">{{$blog->title}}</div>
    </div>
    <img src='{{$blog->thumbnail}}' class="thumbnail" style="margin-bottom:48px;">
    <div class="body">{{$blog->body}}</div>

</div>
<div class="section-comment">
    <div class="space-headings">
        <h2>Leave a comment</h2>
    </div>
</div>
<div class="section-next">
    <div class="space-headings">
        <h2>Leave a comment</h2>
    </div>
    <div class="grid row">
        <div class="col-lg-4 blog-card">
            <img src="/storage/blog.png">
            <div class="feature-info">
                <div class="caption">
                    <h5>By Glenn Omondi</h5>
                    <h6>Category</h6>
                </div>
                <h5>Lorem ipsum dolor sit amet, sed do eiusmod tempor amet consectetur...</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
        </div>
        <div class="col-lg-4 blog-card">
            <img src="/storage/blog.png">
            <div class="feature-info">
                <div class="caption">
                    <h5>By Glenn Omondi</h5>
                    <h6>Category</h6>
                </div>
                <h5>Lorem ipsum dolor sit amet, sed do eiusmod tempor amet consectetur...</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
        </div>
        <div class="col-lg-4 blog-card">
            <img src="/storage/blog.png">
            <div class="feature-info">
                <div class="caption">
                    <h5>By Glenn Omondi</h5>
                    <h6>Category</h6>
                </div>
                <h5>Lorem ipsum dolor sit amet, sed do eiusmod tempor amet consectetur...</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
        </div>      
    </div>
</div>
@endsection
