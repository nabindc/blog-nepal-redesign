@extends('frontend.layouts.front_design')
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

    <header class="type-1">
        <a class="logo float-left"><img src="{{asset('public/frontend/images/whitelogo.png')}}" alt="" height="16"></a>
        <nav class="nav float-right">
            <ul>
                <li><a href="#home">Home</a></li>
                <li ><a href="#about">About</a></li>
                <li><a href="#blog">Blogs</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header> 

    <header class="type-1 fixed">
        <a class="logo float-left"><img src="{{asset('public/frontend/images/mylogo.png')}}" alt="" height="16"></a>
        <nav class="nav float-right">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#blog">Blogs</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
        
	<!-- HOME SECTION
	================================================== -->
	<section id="home" class="home" style="background: url({{asset('public/backend/sites/'.$sites->image)}}); background-size: cover; width: 100%; position: relative; display: table"> 
		<div class="home-content">
			<div class="container">
				<span class="little-text wow fadeInUp" data-wow-delay="0.1s">{{$sites->title}}</span>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">{{$sites->sub_title}}</h1>
				<p class="wow fadeInUp" data-wow-delay="0.1s">{{$sites->content}}</p>
                <!-- Down Icon -->
                <a href="#" class="down-icon wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-circle"></div>
                    <div class="icon">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
			</div>
			<div class="svg-wave">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="248" viewBox="0 0 3600 248">
				  <path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"/>
				</svg>
			</div>
		</div>
	</section>

	<!-- ABOUT SECTION
	================================================== -->
	<section id="about" data-midnight="white" class="about type-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text wow fadeInUp" data-wow-delay="0.1s">
					<div class="section-title bottom_30 top_45">
						<span>{{$aboutme->title}}</span>
						<h2 class="title">{{$aboutme->sub_title}}</h2>
					</div>
					<p>&hearts;&hearts;&hearts; {{$aboutme->content}}<br>....&hearts;....Thank You....&hearts;....</p><br>
					<a href="{{$aboutme->video}}" class="about-video popup-youtube top_30"><i class="fa fa-play"></i> MY PRESENTATION </a>

				</div>
				<div class="col-md-6 image wow fadeInUp" data-wow-delay="0.1s">
					<img src="{{asset('public/backend/sites/large/'.$aboutme->image)}}" alt="">
				</div>
			</div>
		</div>


		<!-- What we do -->
		<div class="container top_120 wow fadeInUp" data-wow-delay="0.3s">
        <div class="section-title padding_20 text-center">
                    <span><h2> &hearts; &hearts; &hearts; What I DO &hearts; &hearts; &hearts;</h2></span>
                </div>
			<div class="owl-carousel owl-theme features" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"  data-wow-delay="0.1s">
                @foreach($services as $service)
				<div class="item service text-center">
	                <i class="icon-desktop"></i>
	                <h3 class="title top_15 bottom_15">{{$service->title}}</h3>
	                <p>{{$service->content}}</p> 
                    </div>
                 @endforeach
			</div>
		</div>
        <div class="svg-wave">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="248" viewBox="0 0 3594 343">
              <path d="M-7,311.773S857.694,141.03,1933,270.8c1113.66,134.4,1661,39.972,1661,39.972V0H-8Z"/>
            </svg>
        </div> 
	</section>


        <!-- BLOG SECTION -->
        <section id="blog" class="blog type-1">
            <div class="container">
                <div class="section-title padding_90 text-center">
                    <span>BlOG POSTS</span>
                    <h2 class="title">Recent Blog Posts</h2>
                </div>

                <div class="row">

                    @foreach($blogposts as $blogpost)
                    <!-- blog  -->
                    <a href="{{route('view.singleblogposts', $blogpost->slug)}}" class="col-md-4 single-blog lifestyle wow fadeInUp" data-wow-delay="0.1s">
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
                    <!-- blog 2 -->
                    
                </div> <!-- row end -->
                <div class="col-md-12 text-center padding_90">
                    <a href="{{route('view.allblogposts')}}" class="site-btn wow fadeInUp" data-wow-delay="0.1s" data-wow-offset="-100"> View All Blogs </a>
                </div>
            </div>
            <div class="svg-wave">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="248" viewBox="0 0 3594 343">
                  <path d="M-7,311.773S857.694,141.03,1933,270.8c1113.66,134.4,1661,39.972,1661,39.972V0H-8Z"/>
                </svg>
            </div> 
        </section>
        
        <!-- CONTACT SECTION-->
        

        <section id="contact" class="contact type-1 bg-pink">
            <div class="container">
                <div class="section-title padding_90 text-center">
                    <span>CONTACT US</span>
                    <h2 class="title">Get In Touch</h2>
                </div>
                <!-- Contact Information -->
                <div class="information col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 info text-center wow fadeInUp" data-wow-delay="0.2s">
                            <i class="icon-phone"></i>
                            <p>{{$contact->phone}}</p>
                        </div>
                        <div class="col-md-4 col-sm-6 info text-center wow fadeInUp" data-wow-delay="0.3s">
                            <i class="icon-map"></i>
                            <p>{{$contact->address}}</p>
                        </div>
                        <div class="col-md-4 col-sm-12 info text-center wow fadeInUp" data-wow-delay="0.4s">
                            <i class="icon-envelope"></i>
                            <p>{{$contact->email}}</p>
                        </div>
                    </div>
                </div>



                <!-- Contact Form -->
                <form class="contact-form top_90 col-md-12 padding_90 wow fadeInUp" data-wow-delay="0.3s" action="{{route('store.message')}}" method="post">
                 @if(Session::has('flash_message_success'))
                  <div class="row">
                    <div class="col-md-4"></div>
                        <div class="alert alert-success text-center col-md-4">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                                <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                    @endif

                    @csrf
                    <div class="col-md-8 offset-md-2">
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
                                <textarea name="message" id="con_message" class="requie" placeholder="Any message for me?" rows="8"></textarea>
                                <button id="submit" class="site-btn top_30 pull-right" type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- container end -->    
        </section>

        </div> <!-- wrapper end -->


      
@endsection