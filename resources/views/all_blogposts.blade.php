@extends('frontend.layouts.blog_design')
@section('content')
<body>

 <!-- Preloading --> 
<div class="preloader">
    <div class="sh-wave-loader">
      <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="60px" viewBox="5 0 80 60">
        <path class="wave" fill="none" stroke="#f02044" stroke-width="3" stroke-linecap="round" d="M 0 37.5 c 7.684299348848887 0 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15">
        </path>
      </svg>
    </div>
</div>

    <div class="wrapper">

    <header class="type-1 dark">
        <a class="logo float-left"><img src="images/logo-black.png" alt="" height="16"></a>
        <nav class="float-right">
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="index.html#service">Service</a></li>
                <li><a href="{{route('view.allblogposts')}}">Blogs</a></li>
                <li><a href="index.html#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

	<!-- ARTICLE CONTENT
	================================================== -->

        <div class="blog type-1 top_120">
            <div class="cont">
                <div class="row">
                     @foreach($blogposts as $blogpost)
                    <!-- blog  -->
                    <a href="{{route('view.singleblogposts', $blogpost->slug)}}" class="col-md-4 single-blog lifestyle wow fadeInUp" data-wow-delay="0.8s">
                        <img src="{{asset('public/backend/uploads/blogs/small/'.$blogpost->image)}}" alt="">
                       
                        @foreach($categories as $cat)
                        @if($cat->id == $blogpost->category_id)
                         <span class="category">
                        {{$cat->name}}
                        </span>
                        @endif
                        @endforeach

                        <h2 class="title">{{$blogpost->title}}</h2>
                        <span class="date">{{$blogpost->date}}</span>
                    </a>
                    @endforeach
                    
                </div> <!-- row end -->
            </div>
        </div>

    </div> <!-- wrapper end -->


 @endsection