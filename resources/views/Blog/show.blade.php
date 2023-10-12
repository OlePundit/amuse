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
    <img src='/storage/{{$slug->thumbnail}}' class="thumbnail" style="margin-bottom:48px;">
    <div class="body">{{$slug->body}}</div>

</div>
<div class="section-comment">
    <div class="space-headings">
        <h2>Leave a comment</h2>
    </div>
    <form action="/comment" method="post" style="width:100%;display:flex;flex-direction:column;">
        @csrf
        <div class="form-group justify-content-center align-items-center d-flex" style="display:flex;flex-direction:column;">
            <div class="col-sm-8 justify-content-center align-items-center d-flex">
                <textarea class="form-control" style="width:100%;" name="comments"></textarea>
                <input type="hidden" value="{{$slug->id}}" name="blog_id">
            </div>
            <button type="submit" class="mt-3">Submit</button>
        </div>
    </form>
    <div class="comment-wrap">        
        @foreach($slug->comment as $comment)
        <h4 class="">{{$comment->comments}}</h4>
        <h5 class=""><span>@</span>{{$comment->user->name}}</h4>
        @endforeach
    </div>
</div>
<div class="section-next">
    <div class="space-headings">
        <h2>What to read next</h2>
    </div>
    <div class="grid">
        @foreach($featuredBlogs as $featuredBlog)
        <div class="col-lg-4 blog-card">
            <img src="/storage/{{$featuredBlog->thumbnail}}">
            <div class="feature-info">
                <div class="caption">
                    <h5>By {{$featuredBlog->author}}</h5>
                    <h6>{{$featuredBlog->category}}</h6>
                </div>
                <h5>{{$featuredBlog->title}}</h5>
                <p>{{ Str::limit($featuredBlog->body, $limit = 120, $end = '...') }}</p>
            </div>
        </div>
        @endforeach             
    </div>
</div>
@endsection
