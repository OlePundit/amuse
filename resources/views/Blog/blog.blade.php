@extends('layouts.app')

@section('content')
<div class="section-featured">
     <div class="space-headings">
        <h2>Featured blogs</h2>
     </div>
     <div class="featured">
        <div class="featured-item">
            <img src="/storage/featured.png">
            <div class="wrap">
                <div class="caption">
                    <h5>By <span>{{$firstBlog->author}}</span>  {{$firstBlog->created_at}}</h5>
                    <div class="category align-items-baseline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9" fill="none">
                        <circle cx="4" cy="4.5" r="3.5" stroke="#ED701D"/>
                        </svg>
                        <h6>{{$firstBlog->category}}</h6>
                    </div>
                </div>
                <p class="featured-item-header">{{$firstBlog->title}}</p>
                <p class="details">{!! Str::limit(strip_tags($firstBlog->body), 120, '...') !!}</p>
                <a href="" style="text-decoration:none;">Read More
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <mask id="mask0_578_589" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_578_589)">
                        <path d="M16.175 13H4V11H16.175L10.575 5.4L12 4L20 12L12 20L10.575 18.6L16.175 13Z" fill="#222021"/>
                    </g>
                    </svg>
                </a>
            </div>
            
        </div>
        <div class="featured-blogs">
            @foreach($featuredBlogs as $featuredBlog)
            <div class="featured-blog-small">
               <img src="/public/storage/{{$featuredBlog->thumbnail}}" style="width: 210px;
height: 143px;
border-radius: var(--border-radius-1, 8px);
"> 
               <div class="details">
                    <h5>{{$featuredBlog->title}} </h5>
                    <p>{!! Str::limit(strip_tags($featuredBlog->body), 120, '...') !!}

                    </p>
                    <div class="caption">
                        <h5>By {{$featuredBlog->author}}</h5>
                        <h6>{{$featuredBlog->category}}</h6>
                    </div>
               </div>
            </div>
            @endforeach  
        </div>
     </div>
</div>
<div class="section-blogs d-flex justify-content-center align-items-center">
    <div class="space-headings">
        <h2>All Blogs</h2>
    </div>
    <!--<div class="space-headings1">
        <button class="category1">Category 1</button>
        <button>Category 2</button>
        <button>Category 3</button>
        <button>Category 4</button>
        <button>Category 5</button>

    </div>-->
    <div class="grid">
        @foreach($blogs as $blog)
        <a href="/blog/{{$blog->slug}}" style="text-decoration:none;">
        <div class="blog-card">
            <img src="/public/storage/{{$blog->thumbnail}}">
            <div class="feature-info">
                <div class="caption">
                    <h5>{{$blog->author}}</h5>
                    <h6>{{$blog->category}}</h6>
                </div>
                <h5>{{$blog->title}}</h5>
                <p>{!! Str::limit(strip_tags($blog->body), 120, '...') !!}

</p>

            </div>
        </div>
        </a>
        @endforeach    
        
        
    </div>
</div>
<div class="section-CTA">
    
</div>
@endsection
