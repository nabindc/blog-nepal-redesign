@extends('frontend.layouts.front_design')
@section('content')

    <!-- ABOUT SECTION
    ================================================== -->
    <section id="about" data-midnight="white" class="about type-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title bottom_30 top_45">
                        <span>ABOUT OUR AGENCY </span>
                        <h2 class="title">We are working on web design, <br> branding and software.</h2>
                    </div>
                    <p>For instance, whenever I go back to the guest house during the morning to copy out the contract, these gentlemen are always still sitting there eating their breakfasts.  </p><br>
                    <a href="https://www.youtube.com/watch?v=M-M3rdL_WLQ" class="about-video popup-youtube top_30"><i class="fa fa-play"></i> OUR PRESENTATION </a>

                </div>
                <div class="col-md-6 image wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{asset('public/frontend/images/about-1.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <!-- What we do -->
        <div class="container top_120 wow fadeInUp" data-wow-delay="0.1s">
            <div class="owl-carousel owl-theme features" data-items-desktop="3" data-items-desktop-small="3" data-items-tablet="2" data-items-tablet-small="1"  data-wow-delay="0.1s">
                <div class="item service text-center">
                    <i class="icon-desktop"></i>
                    <h3 class="title top_15 bottom_15">Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
                <div class="item service text-center">
                    <i class="icon-tools"></i>
                    <h3 class="title top_15 bottom_15">Branding Identity</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
                <div class="item service text-center">
                    <i class="icon-paintbrush"></i>
                    <h3 class="title top_15 bottom_15">Graphic Design</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
                <div class="item service text-center">
                    <i class="icon-phone"></i>
                    <h3 class="title top_15 bottom_15">Mobile Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
                <div class="item service text-center">
                    <i class="icon-camera"></i>
                    <h3 class="title top_15 bottom_15">Photography</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
                <div class="item service text-center">
                    <i class="icon-lightbulb"></i>
                    <h3 class="title top_15 bottom_15">Creative Design</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
                <div class="item service text-center">
                    <i class="icon-desktop"></i>
                    <h3 class="title top_15 bottom_15">Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p> 
                </div>
            </div>
        </div>
        <div class="svg-wave">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="248" viewBox="0 0 3594 343">
              <path d="M-7,311.773S857.694,141.03,1933,270.8c1113.66,134.4,1661,39.972,1661,39.972V0H-8Z"/>
            </svg>
        </div> 
    </section>

    <!-- PORTFOLIO SECTION
    ================================================== -->
      
        <!-- BLOG SECTION
        ================================================== -->
        <section id="blog" class="blog type-1">
            <div class="container">
                <div class="section-title padding_90 text-center">
                    <span>OUR POSTS</span>
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
                    <a href="{{route('view.allblogposts')}}" class="site-btn wow fadeInUp" data-wow-delay="0.1s" data-wow-offset="-100"> View All </a>
                </div>
            </div>
            <div class="svg-wave">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="248" viewBox="0 0 3594 343">
                  <path d="M-7,311.773S857.694,141.03,1933,270.8c1113.66,134.4,1661,39.972,1661,39.972V0H-8Z"/>
                </svg>
            </div> 
        </section>
        
        <!-- CONTACT SECTION
        ================================================== -->
        <section id="contact" class="contact type-1 bg-pink">
            <div class="container">
                <div class="section-title padding_90 text-center">
                    <span>CONTACT US</span>
                    <h2 class="title">Get In Touch</h2>
                </div>
                <!-- Contact Information -->
                <div class="information col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 info text-center wow fadeInUp" data-wow-delay="0.1s">
                            <i class="icon-phone"></i>
                            <p>49 0216 514 25 25 <br> 0216 514 25 25</p>
                        </div>
                        <div class="col-md-4 col-sm-6 info text-center wow fadeInUp" data-wow-delay="0.1s">
                            <i class="icon-map"></i>
                            <p>1444 S. Alameda Street Los Angeles,<br> California 90021</p>
                        </div>
                        <div class="col-md-4 col-sm-12 info text-center wow fadeInUp" data-wow-delay="0.1s">
                            <i class="icon-envelope"></i>
                            <p>info@alberto.com <br> contact@alberto.com</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <form class="contact-form top_90 col-md-12 padding_90 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-md-8 offset-md-2">
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
                                <textarea name="con_message" id="con_message" class="requie" placeholder="How can we help you?" rows="8"></textarea>
                                <button id="con_submit" class="site-btn top_30 pull-right" type="submit">Send a Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- container end -->    
        </section>

        </div> <!-- wrapper end -->

     
@endsection