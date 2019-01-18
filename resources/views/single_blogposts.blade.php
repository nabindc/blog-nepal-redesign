<!DOCTYPE html>
<html lang="en">
<head> 
<title>A_xut's Blog - Single Blog Page</title>
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
        <a class="logo float-left" href="{{route('index')}}"><img src="{{asset('public/frontend/images/mylogo.png')}}" alt="" height="16"></a>
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
            <div class="container">
                <div class="row">
                    <!-- Blog Article -->
                    <div class="col-md-9">
                        <article>
                            <div class="single-blog-image">
                                <p><h2>{{$blogposts->date}}</h2></p><br>
                                <img class="radius" src="{{asset('public/backend/uploads/blogs/large/'.$blogposts->image)}}" alt="">
                            </div>
                            <h1 class="single-blog-title top_30 bottom_30">{{$blogposts->title}}</h1>
                            <p>{{$blogposts->content}}</p>
                        </article>
                        <!-- Write a comment -->


                        <div class="form top_90">
                                <h2 class="form-title bottom_45">Write a Feedback Message !!</h2>
                        
                        <form class="contact-form top_30" action="{{route('store.message')}}" method="post">
            
                        @if(Session::has('flash_message_success'))
                        <div class="row">
                            <div class="col-md-3"></div>
                                <div class="alert alert-success text-center col-md-6">
                                    <button type="button" class="close" data-dismiss="alert">X</button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                                </div>
                            <div class="col-md-3"></div>
                        </div>
                        @endif



                         @csrf
                            <div class="row">
                                <!--Name-->
                                <div class="col-md-6">
                                    <input id="con_name" name="name" class="form-inp requie" type="text" placeholder="Name">
                                </div>
                                <!--Email-->
                                <div class="col-md-6">
                                    <input id="con_email" name="email" class="form-inp requie" type="text" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <!--Message-->
                                    <textarea name="message" id="con_message" class="requie" placeholder="Your Message" rows="8"></textarea>
                                    <button id="submit" class="site-btn top_60 float-left" type="submit">Send a Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    <!-- Blog Sidebar -->
                    <div class="col-md-3">
                        <!-- Recent Post -->
                        <div class="recent-post">
                            <h3 class="widget-title">Recent Posts</h3>
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


        <!-- FOOTER SECTION
        ================================================== -->
        <footer class="type-2">
            <div class="cont text-center padding_90">
                <div class="row">
                    
                    <div class="col-md-3 ftr-widget contact">
                        <h2 class="title">Contact</h2>
                        <p>{{$contact->address}}</p>
                        <p>{{$contact->email}}</p>
                        <p>{{$contact->phone}}</p>
                    </div>

                    <div class="col-md-2 ftr-widget contact">
                        <h2 class="title">Short Links</h2>
                        <p><a href="{{route('index')}}">Home</a></p>
                        <p><a href="{{route('view.allblogposts')}}">All Blogs</a></p>
                </div>
                     <div class="col-md-2 ftr-widget">
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
                    

                <div class="col-md-5 ftr-widget">
                        <h2 class="title">{{$aboutme->title}}</h2>
                       <p>{{$aboutme->content}}<br>....&hearts;....Thank You....&hearts;....</p>
                    </div>

                </div> 

                <div class="cont text-center">
                    <div class="ftr-bottom padding_30">
                        <p>Copyright © 2019 A_xut, All rights Reserved. <br> Developed by <a href="https://www.nabindc.com.np" target="_blank">CreativeNb</a></p>
            
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