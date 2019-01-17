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
                <li><a href="index.html#portfolio">Portfolio</a></li>
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
            <div class="container">
                <div class="row">
                    <!-- Blog Article -->
                    <div class="col-md-9">
                        <article>
                            <div class="single-blog-image">
                                <img class="radius" src="{{asset('public/backend/uploads/blogs/large/'.$blogposts->image)}}" alt="">
                            </div>
                            <h1 class="single-blog-title top_30 bottom_30">{{$blogposts->title}}</h1>
                            <p>{{$blogposts->content}}</p>
                        </article>
                        <!-- Write a comment -->
                        <div class="form top_90">
                                <h2 class="form-title bottom_45">Write a Comment</h2>
                        <form class="contact-form top_30" method="POST">
                            <div class="row">
                                <!--Name-->
                                <div class="col-md-6">
                                    <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                                </div>
                                <!--Email-->
                                <div class="col-md-6">
                                    <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <!--Message-->
                                    <textarea name="con_message" id="con_message" class="requie" placeholder="Your Message" rows="8"></textarea>
                                    <button id="con_submit" class="site-btn top_60 float-left" type="submit">Send a Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>



                    <!-- Blog Sidebar -->
                    <div class="col-md-3">
                        <!-- Recent Post -->
                        <div class="recent-post">

                            <h3 class="widget-title">Recent Post</h3>
                            <ul class="top_15">
                                @foreach($recentblogs as $blogpost)
                                <li>
                                    <a href="{{route('view.singleblogposts', $blogpost->slug)}}">
                                        <h4 class="title">{{$blogpost->title}}</h4>
                                        <span>{{$blogpost->date}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Recent Post -->



                        <div class="categories top_45">
                            <h3 class="widget-title">Categories</h3>
                            @foreach($categories as $cat)
                            <ul class="top_30">
                                <li><a href="">{{$cat->name}}</a>
                                </li>
                            </ul>
                            @endforeach
                        </div>

                    </div>
                </div> <!-- row end -->
            </div>
        </div>
	



    </div> <!-- wrapper end -->

@endsection