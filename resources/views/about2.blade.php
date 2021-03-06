<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About  Trafgoo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Learn and Earn on trafgoo " />
	<meta name="keywords" content="Learn about topics you actually care about and unlock cash from parents and sponsors when you do. Everything is broke into bite sized courses so you can learn between classes, on the bus or whenever it's easy. " />
	<meta name="author" content="Mikeih-Tech" />
	

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by Mikeih-Tech.co
		
	Website: 		http://mikeih-tech.co/
	Email: 			info@mikeih-tech.co
	Twitter: 		http://twitter.com/xxxxxxxx
	Facebook: 		https://www.facebook.com/xxxxxxxx

	//////////////////////////////////////////////////////
	 -->
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.trafgoo.com</p>
						<p class="site col-xs-6 text-center">@if(session()->has('user')) Hi, {{session()->get('user')}} @endif</p><p class="num col-xs-2">Call: +234 708 140 5096</p>
						<ul class="fh5co-social">
							<li><a href="{{route('goToPage')}}?page=#"><i class="icon-facebook2"></i></a></li>
							<li><a href="{{route('goToPage')}}?page=#"><i class="icon-twitter2"></i></a></li>
							<li><a href="{{route('goToPage')}}?page=#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="{{route('goToPage')}}?page=#"><i class="icon-github"></i></a></li>
							<li><a href="{{route('goToPage')}}?page=#"><i class="icon-whatsapp"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{route('goToPage')}}?page=index2"><i class="icon-study"></i>Trafgoo<span></span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="{{route('goToPage')}}?page=index2">Home</a></li>
							<li><a href="{{route('goToPage')}}?page=courses2">Courses</a></li>
							<li><a href="{{route('goToPage')}}?page=teacher2">Teacher</a></li>
							<li><a href="{{route('goToPage')}}?page=about2">About</a></li>
							<li><a href="{{route('goToPage')}}?page=ebook2">eBook</a></li>
							<li class="has-dropdown">
								<a href="{{route('goToPage')}}?page=blog2">Blog</a>
								<ul class="dropdown">
									<li><a href="{{route('goToPage')}}?page=blog2">T-News</a></li>
									<li><a href="{{route('goToPage')}}?page=blog2">Scholarships</a></li>
									<li><a href="{{route('goToPage')}}?page=blog2">Job</a></li>
									<li><a href="{{route('goToPage')}}?page=blog2">Trafgoo Update</a></li>
								</ul>
							</li>
							<li><a href="{{route('goToPage')}}?page=contact2">Contact</a></li>
							@if(session()->has('user'))<li class="btn-cta"><a href="#" data-toggle="modal" data-target="#tesModal"><span>My Account</span></a></li>@endif
							@if(!session()->has('user'))<li class="btn-cta"><a href="{{route('goToPage')}}?page=register" id="st-btn"><span>Register</span></a></li> @endif @if(session()->has('user'))<li class="btn-cta"><a href="{{route('logout')}}" id="st-btn"><span>Sign Out</span></a></li> @else <li class="btn-cta"><a href="{{route('login')}}" id="st-btn" ><span>Sign In</span></a></li>@endif
						
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/abouttut.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">About Us</h1>
									<h2>Brought to you by <a href="{{route('goToPage')}}?page=#" target="_blank">Trafgoo.Edu</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>About Our Trafgoo</span>
				<h2>Welcome to Trafgoo Website</h2>
				<p>Trafgoo offers pratice exercises,eBooks, instructional videos and a personalized dashboard that empower learners to study at their own pace. We focus on skill mastery to help learners estabish strong foundations, so there's no limit to what they can learn next!</p>
				<p>We are working hard to ensure that Trafgoo empowers coaches of all kinds to help improve  their students skills</p>
				<p>We are developers, teachers, designers, strategists, scientists, critical thinkers and content specialist who passionately believe in aspiring the world to learn. A few great people can make a big difference.</p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/QWER.jpg" alt="Free HTML5 Bootstrap Template">
			</div>
		</div>
	</div>

	<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Foreign Followers</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Students Enrolled</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-bulb"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Classes Complete</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-head"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Certified Teachers</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Course categories</h2>
					<p>All of our certified courses are self-paced and have been designed by subject matter experts to give you an interactive and enjoyablelearning expericence.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-shop"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Business</a></h3>
							<p>Want to excel in your business? Our online business  courses can help you further your career and improve  communication, management, and leadership skill.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Health &amp; Psychology</a></h3>
							<p>Explore the realities of living with health problems, improve your own wellbeing or discover psychology with our online course</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-banknote"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Accounting</a></h3>
							<p>Explore our Audit, Accounting & Financee training courses delivered by industry experts. Learn financial accounting, managerial accounting and more with our online courses.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Science &amp; Technology</a></h3>
							<p>The course encourage students to re-define science and technology in the context of world's changing confucian education system, booming market economy...</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-photo"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Art &amp; Media</a></h3>
							<p>Join online Media and Art courses from leading Edu-Site and cultural institutions. Explore creative industries like film, music, journalism and theatre.</p>
						</div>
					</div>
				</div>

				
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-home-outline"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Real Estate</a></h3>
							<p>What is a course in real estate? Such courses instruct students on the basics of the operations and structure of the property sector</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-bubble3"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Language</a></h3>
							<p>These language courses, created by Trafgoo, will help you develop your skills in different domain area. Specific methodology per course.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-world"></i>
						</span>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=courses">Web &amp; Programming</a></h3>
							<p>These online web development courses will teach you the programming knowledge required to build responsive, performant web pages and applications.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Thomas Chris</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Learn & Earn</strong></p>
					<p><a href="{{route('goToPage')}}?page=courses" class="btn btn-primary btn-lg btn-reg">Click Here TO Learn More!</a></p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Instagram Gallery</span></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-padded">
				<a href="{{route('goToPage')}}?page=#" class="gallery" style="background-image: url(images/project-5.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="{{route('goToPage')}}?page=#" class="gallery" style="background-image: url(images/project-2.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="{{route('goToPage')}}?page=#" class="gallery" style="background-image: url(images/project-3.jpg);"></a>
			</div>
			<div class="col-md-3 col-padded">
				<a href="{{route('goToPage')}}?page=#" class="gallery" style="background-image: url(images/project-4.jpg);"></a>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values,beliefs and habits. Educational methods includes teaching, training, storytelling, discussion and directed research.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="{{route('goToPage')}}?page=#">Course</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Blog</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Contact</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Terms</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="{{route('goToPage')}}?page=#">Blog</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Privacy</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Testimonials</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Handbook</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="{{route('goToPage')}}?page=#">Marketing</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Visual Assistant</a></li>
						<li><a href="{{route('goToPage')}}?page=#">System Analysis</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="{{route('goToPage')}}?page=#">Find Designers</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Find Developers</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Teams</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Advertise</a></li>
						<li><a href="{{route('goToPage')}}?page=#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020 Trafgoo.Edu. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="{{route('goToPage')}}?page=http://freehtml5.co/" target="_blank">Dennis Manullang</a> +628809615182 <a href="{{route('goToPage')}}?page=#" target="_blank">Learn </a> &amp; <a href="{{route('goToPage')}}?page=#" target="_blank"> Earn</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="{{route('goToPage')}}?page=#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	@include('modal') </body>
</html>

