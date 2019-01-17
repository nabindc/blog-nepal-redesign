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
        <a class="logo float-left"><img src="{{asset('public/frontend/images/logo.png')}}" alt="" height="16"></a>
        <nav class="nav float-right">
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li ><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="{{route('view.allblogposts')}}">Blogs</a></li>
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
        <a class="logo float-left"><img src="{{asset('public/frontend/images/logo-black.png')}}" alt="" height="16"></a>
        <nav class="nav float-right">
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="{{route('view.allblogposts')}}">Blogs</a></li>
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
    <section id="home" class="home"> 
        <div class="home-content">
            <div class="container">
                <span class="little-text wow fadeInUp" data-wow-delay="0.5s">CREATIVE DIGITAL AGENCY</span>
                <h1 class="title wow fadeInUp" data-wow-delay="1s">PENNE AGENCY</h1>
                <p class="wow fadeInUp" data-wow-delay="1.5s">Penne is thriving creative digital & branding agency <br> based by the valley in Paris</p>
                <!-- Down Icon -->
                <a href="#" class="down-icon wow fadeInUp" data-wow-delay="2.0s">
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