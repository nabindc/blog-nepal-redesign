<!DOCTYPE html>
<html lang="en">
<head> 
<title>A_xut's Blog - All Blog Page</title>
<meta charset="UTF-8">
<meta name="description" content="Rize Portfolio Template">
<meta name="keywords" content="personal, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/frontend/css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/frontend/css/cubeportfolio.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}"/>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Font icons -->
    <link rel="stylesheet" href="{{asset('public/frontend/icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/frontend/icon-fonts/etlinefont/style.css')}}"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>
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
        <a class="logo float-left" href="{{route('index')}}"><img src="{{asset('public/frontend/images/black.png')}}" alt="" height="16"></a>
        <nav class="float-right">
            <ul>
                <li><a href="{{route('index')}}#home">Home</a></li>
                <li><a href="{{route('index')}}#about">About</a></li>
                <li><a href="{{route('index')}}#blog">Blogs</a></li>
                <li><a href="{{route('index')}}#contact">Contact</a></li>
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
                    <!-- blog 1 -->
                    <a href="{{route('view.singleblogposts', $blogpost->slug)}}" class="col-md-4 single-blog lifestyle bottom_60">
                        <img src="{{asset('public/backend/uploads/blogs/small/'.$blogpost->image)}}" alt="">
                         @foreach($categories as $cat)
                        @if($cat->id == $blogpost->category_id)
                        <span class="category">{{$cat->name}}</span>
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


        <!-- FOOTER SECTION
        ================================================== -->
        <footer class="type-2">
            <div class="cont text-center padding_90">
                <div class="row">
                    <div class="col-md-5 ftr-widget">
                        <h2 class="title">{{$aboutme->title}}</h2>
                        <p>{{$aboutme->content}}<br>....&hearts;.....Thank You....&hearts;....</p>
                    </div>
                    <div class="col-md-4 ftr-widget contact">
                        <h2 class="title">Contact</h2>
                        <p>{{$contact->address}}</p>
                        <p>{{$contact->email}}</p>
                        <p>{{$contact->phone}}</p>
                    </div>
                    <div class="col-md-3 ftr-widget">
                        <h2 class="title">Social Links</h2>
                        <div class="instagram">
                            <ul>
                           <p> <li><a href="{{$sociallinks->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="{{$sociallinks->twitter}}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{$sociallinks->instagram}}" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="{{$sociallinks->youtube}}" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="{{$sociallinks->github}}" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a></li></p>

                        </ul></div>
                    </div>
                </div>
            </div> <!-- container end -->

                <div class="cont text-center">
                    <div class="ftr-bottom padding_30">
                    <div class="row">

                       <div class="col-md-8"> <p>Copyright © 2019 A_xut, All rights Reserved. &hearts; Developed by <a href="https://www.nabindc.com.np" target="_blank">CreativeNb</a></p></div>

                        <div class="col-md-4"><p>Return >> <a href="{{route('index')}}" class="btn btn-danger btn-mini">Home</a></p></div>
                    </div>
            
                    </div>
                </div>
        </footer>
 

<!-- Javascripts -->
<script src="{{asset('public/frontend/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('public/frontend/js/tilt.jquery.js')}}"></script>
<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('public/frontend/js/main.js')}}"></script>

</body>
</html>