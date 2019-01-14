@extends('frontend.front_design')
@section('content')

	<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<h2 class="intro-heading">Words A Creative Site</h2>
						<p><span>Created with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></span></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-featured">
			<div class="container-fluid">
				<div class="row">
					<div class="post-entry">
						<div class="col-md-6 col-md-push-6 nopaddingbottom animate-box">
							<div class="post-image" style="background-image: url({{asset('public/frontend/images/featured-1.jpg')}});"></div>
						</div>
						<div class="col-md-6 col-md-pull-5 animate-box">
							<div class="display-tc">
								<div class="desc">
									<span class="date">Jan 06, 2016</span>
									<h3>The Creator of FreeHTML5.co Are Awesome</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-about">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Meet Our Staff</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="{{asset('public/frontend/images/user-1.jpg')}}" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Jean Smith</h3>
							<strong class="role">CEO, Founder</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="{{asset('public/frontend/images/user-2.jpg')}}" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Hush Raven</h3>
							<strong class="role">System Analyst</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="{{asset('public/frontend/images/user-3.jpg')}}" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Alex King</h3>
							<strong class="role">Web Developer</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff">
							<img class="img-responsive" src="{{asset('public/frontend/images/user-4.jpg')}}" alt="Free HTML5 Templates by freeHTML5.co">
							<h3>Hush Raven</h3>
							<strong class="role">Web Designer</strong>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat</p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Recent Blog</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="{{asset('public/frontend/images/img-1.jpg')}}" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-bubble"></i></a></span>
								<h3><a href="#">Get Free Template</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div> 
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="{{asset('public/frontend/images/img-2.jpg')}}" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-bubble"></i></a></span>
								<h3><a href="#">Download Bundle Templates 2017</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div> 
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="{{asset('public/frontend/images/img-3.jpg')}}" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-bubble"></i></a></span>
								<h3><a href="#">Inspirational Website</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-work-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Projects</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url({{asset('public/frontend/images/img-1.jpg')}});">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url({{asset('public/frontend/images/img-2.jpg')}});">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url({{asset('public/frontend/images/img-3.jpg')}});">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url({{asset('public/frontend/images/img-4.jpg')}});">
							<a href="#" class="view">
								<span>View Demo</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-counters" style="background-image: url({{asset('public/frontend/images/hero-1.jpg')}});" data-stellar-background-ratio="0.5" id="counter-animate">
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="7520" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Project</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="5450" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Clients</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="6876" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Satisfied Client</span>
					</div>
				</div>
			</div>
		</div>


@endsection