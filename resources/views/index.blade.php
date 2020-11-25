<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trafgoo Education</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="E-learning site for Students. Learn and Earn" />
	<meta name="keywords" content="Start learning with a wide range of free online courses and develop your digital Knowledge, boost your CV with our courses" />
	<meta name="author" content="Mike-Tech" />

	<!-- 
	//////////////////////////////////////////////////////
 
	DESIGNED & DEVELOPED by Mike-Tech
		
	Website: 		http://Mikeih2253.com/
	Email: 			chimikeih@gmail.com
	Twitter: 		http://twitter.com/...
	Facebook: 		https://www.facebook.com/f...

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
						<p class="num">Call: +234 708 140 5096</p>
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
						<div id="fh5co-logo"><a href="{{route('goToPage')}}?page=index"><i class="icon-study"></i>Trafgoo<span></span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="{{route('goToPage')}}?page=index">Home</a></li>
							<li><a href="{{route('goToPage')}}?page=courses">Courses</a></li>
							<li><a href="{{route('goToPage')}}?page=teacher">Teacher</a></li>
							<li><a href="{{route('goToPage')}}?page=about">About</a></li>
							<li><a href="{{route('goToPage')}}?page=ebook">eBook</a></li>
							<li class="has-dropdown">
								<a href="{{route('goToPage')}}?page=blog">Blog</a>
								<ul class="dropdown">
									<li><a href="{{route('goToPage')}}?page=blog">T-News</a></li>
									<li><a href="{{route('goToPage')}}?page=blog">Scholarships</a></li>
									<li><a href="{{route('goToPage')}}?page=blog">Job</a></li>
									<li><a href="{{route('goToPage')}}?page=blog">Trafgoo Update</a></li>
								</ul>
							</li>
							<li><a href="{{route('goToPage')}}?page=contact">Contact</a></li>
							@if(!session()->has('user'))
							<li class="btn-cta"><a href="{{route('goToPage')}}?page=login"><span>Login</span></a></li>
							@else
							<li class="btn-cta"><a href="{{route('logout')}}"><span>Logout</span></a></li>	
						    @endif
							@if(!session()->has('user'))
								<li class="btn-cta"><a href="{{route('goToPage')}}?page=register"><span>Register</span></a></li>
							@endif
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/QWER.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Roots of Education are Bitter, But the Fruit is Sweet</h1>
									<h2>Brought to you by <a href="{{route('goToPage')}}?page=#" target="_blank">Trafgoo.Edu</a></h2>
									<p><a class="btn btn-primary btn-lg" href="{{route('goToPage')}}?page=courses">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/WEBE.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>The Great Aim of Education is not Knowledge, But Action</h1>
									<h2>Brought to you by <a href="{{route('goToPage')}}?page=#" target="_blank">Trafgoo.Edu</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="courses">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/payincrease.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>We Help You to Learn New Things</h1>
									<h2>Brought to you by <a href="{{route('goToPage')}}?page=#" target="_blank">Trafgoo.Edu</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="courses">Start Learning Now!</a></p>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>

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











	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Course</h2>
					<p>Our professional and skill-based courses expose students to practical knowledge, development of skills and building a positive attitude. Training is a part of the academic curriculum. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=affiliatemarketing" class="course-img" style="background-image: url(images/affiliatemarketing.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=affiliatemarketing">Affiliate Marketing (CERT)</a></h3>
							<p>Affiliate Marketing Course & Certification. Get certified today at Trafgoo.Edu. <br>Learn how to use email marketing list or website to create a network that focuses on communicating services and products on network platforms.</p>
							<span><a href="{{route('goToPage')}}?page=affiliatemarketing" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=amazonkindle" class="course-img" style="background-image: url(images/amazonkindle.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=amazonkindle">Amazon Kindle Publishing (CERT)</a></h3>
							<p>Amazon Kindle Publishing & Certification. Get certified today at Trafgoo.Edu. <br>Learn how to pubish books on the Amazon Kindle from top-online instructors <br><br><br></p>
							<span><a href="{{route('goToPage')}}?page=amazonkindle" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=2Dadobeanimation" class="course-img" style="background-image: url(images/2danimation.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=2Dadobeanimation">2D Adobe Animate (CERT)</a></h3>
							<p>2D Adobe Animate & Certification. Get certified today at Trafgoo.Edu. <br>2D Amination focuses on creating characters, storyboards, and backgrounds in two-dimensional environments. </p>
							<span><a href="{{route('goToPage')}}?page=2Dadobeanimation" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=3Dadobeanimation" class="course-img" style="background-image: url(images/3danimation.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=3Dadobeanimation">3D Adobe Animate (CERT)</a></h3>
							<p>3D Adobe Animate & Certification. Get certified today at Trafgoo.Edu. <br>In these course you will learn about character creation, walk cycles,3D modeling, texturing, keyframe animation</p>
							<span><a href="{{route('goToPage')}}?page=3Dadobeanimation" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=anti-agindspa" class="course-img" style="background-image: url(images/Skincare-small.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=anti-agindspa">Anti-aging Spa</a></h3>
							<p>Learn how to protect your skill from UV rays and other environmental and metabolic oxidizing conditions to preserve a youthful appearance. NOTE: Personal use no certificate</p>
							<span><a href="{{route('goToPage')}}?page=anti-agingspa" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=autocad" class="course-img" style="background-image: url(images/autocad.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=autocad">Auto CAD (CERT)</a></h3>
							<p>AutoCAD & Certification. Get certified today at Trafgoo.Edu. <br>These Program is designed for students to gain knowledgeon on how to use this software for CAD #(Architecture, Engineering, interior design and construction inductries)</p>
							<span><a href="{{route('goToPage')}}?page=autocad" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=baking" class="course-img" style="background-image: url(images/baking.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=baking">Bakery Business</a></h3>
							<p>With these Skillshare course, you'll take your creativity to the kitchen, learning, baking, decorating and cooking up new ideas. Also benefit from personalized advice and support from our experts.</p>
							<span><a href="{{route('goToPage')}}?page=baking" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=barbing" class="course-img" style="background-image: url(images/barbing.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=barbing">Barbing</a></h3>
							<p>Discover how to apply barbering tools and products. Learn barbershop protocols. SKILL. in this training you will learn: shaving techniques, beard grooming etc...<br><br></p>
							<span><a href="{{route('goToPage')}}?page=barbing" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=blogging" class="course-img" style="background-image: url(images/blogging.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=blogging">Blogging </a></h3>
							<p>Blogging Course: Learn how to start a blog and create a blogging strategy for your business. Craft a blogging strategy that drives business growth. Create a quality blog content your audience loves to read and share.</p>
							<span><a href="{{route('goToPage')}}?page=blogging" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=computerhardware" class="course-img" style="background-image: url(images/computerhardware.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=computerhardware">Computer Hardware (CERT)</a></h3>
							<p>Computer Hardware & Certification. Get certified today at Trafgoo.Edu. <br>In these course you will learn how to design, create and test computer hardware equipment, as well as researching and developing new technologies</p>
							<span><a href="{{route('goToPage')}}?page=computerhardware" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=chinese" class="course-img" style="background-image: url(images/chinese.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=chinese">Chinese Language (CERT)</a></h3>
							<p>CorelDRAW & Certification. Get certified today at Trafgoo.Edu. <br>Learn how to use CorelDRAW design software to create vector art and illustrations for logos, web graphics, brochure and more.</p>
							<span><a href="{{route('goToPage')}}?page=chinese" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>



				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=css" class="course-img" style="background-image: url(images/CSS.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=css">Computer Hardware (CERT)</a></h3>
							<p>Computer Hardware & Certification. Get certified today at Trafgoo.Edu. <br>In these course you will learn how to design, create and test computer hardware equipment, as well as researching and developing new technologies</p>
							<span><a href="{{route('goToPage')}}?page=css" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=coreldraw" class="course-img" style="background-image: url(images/coreldraw.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=coreldraw">CorelDRAW (CERT)</a></h3>
							<p>CorelDRAW & Certification. Get certified today at Trafgoo.Edu. <br>Learn how to use CorelDRAW design software to create vector art and illustrations for logos, web graphics, brochure and more.</p>
							<span><a href="{{route('goToPage')}}?page=coreldraw" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>


				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=customclothing" class="course-img" style="background-image: url(images/customclothing.jpeg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=customclothing">Custom Clothing</a></h3>
							<p>This course is for those who are serious about starting their own brand. Clothing design courses are generally offer as a part of certificate, associate's and degree programs in fashion design or fashion merchandising.</p>
							<span><a href="{{route('goToPage')}}?page=customclothing" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=dropshipping" class="course-img" style="background-image: url(images/dropshipping.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=dropshipping">Drop Shipping</a></h3>
							<p>A dropshipping is essentially a series of educational lessons that are aimed at helping entrepreneurs of all backgroung who are interested in starting their own dropshipping business. </p>
							<span><a href="{{route('goToPage')}}?page=dropshipping" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=fitnessinstructor" class="course-img" style="background-image: url(images/fitness.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=fitnessinstructor">Fitness Instructor (CERT)</a></h3>
							<p>Fitness Instructor & Certification. Get certified today at Trafgoo.Edu. <br>Our TRCPA and REPs recognised Fitness Instructor courses lead to the industry certifiation you need to work in a gym based role.</p>
							<span><a href="{{route('goToPage')}}?page=fitnessinstructor" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=forex" class="course-img" style="background-image: url(images/forex.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=forex">Forex (CERT)</a></h3>
							<p>A successful forex trader knows that it takes a lot of time, education and practice to master the art of forex trading. On the other hand, if you are willing to invest in education and self-discipline, then investing in forex trading is definitely worthy.</p>
							<span><a href="{{route('goToPage')}}?page=forex" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=html" class="course-img" style="background-image: url(images/html.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=html">HTML</a></h3>
							<p>HTML & Certification. Get certified today at Trafgoo.Edu. <br><br>Throughout this course, you'll learn about underlying structure of the web - HTML. You'll learn how to use this tree-like strucrure to create websites.<br></p>
							<span><a href="{{route('goToPage')}}?page=html" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=interiordecor" class="course-img" style="background-image: url(images/interiordecor.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=interiordecor">Interior Decor (CERT)</a></h3>
							<p>This interior design course will provide you with an overview of interior design as a discipline. You will learn about project planning and client communication as well as the design principles and factors a designer take into account when working within a space</p>
							<span><a href="{{route('goToPage')}}?page=interiordecor" class="btn btn-primary btn-sm btn-course">Take A Course</a></span> 
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=makeup" class="course-img" style="background-image: url(images/makeup.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=makeup">Makeup Business</a></h3><br>
							<p>This course will teach you how to apply professional makeup for a variety of different looks including daytime, night time, film and photoshoots. you will learn why people use makeup and work as makeup artists.<br><br><br></p>
							<span><a href="{{route('goToPage')}}?page=makeup" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=mathstut1" class="course-img" style="background-image: url(images/maths1.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=mathstut1">MATH-TUT (A)</a></h3>
							<p>Our math lesson are designed to make maths meanful to the student. Each math lesson provides in-depth instruction ideal for learners for higher education (100 Level First Semester)</p>
							<span><a href="{{route('goToPage')}}?page=mathstut1" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=mathstut2" class="course-img" style="background-image: url(images/maths2.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=mathstut2">MATHS-TUT (B)</a></h3>
							<p>Our math lesson are designed to make maths meanful to the student. Each math lesson provides in-depth instruction ideal for learners for higher education (100 Level Second Semester)</p>
							<span><a href="{{route('goToPage')}}?page=mathstut2" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=mathstut3" class="course-img" style="background-image: url(images/maths3.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=mathstut3">MATHS-TUT (C)</a></h3>
							<p>Our math lesson are designed to make maths meanful to the student. Each math lesson provides in-depth instruction ideal for learners for higher education (200 Level First Semester)</p>
							<span><a href="{{route('goToPage')}}?page=mathstut3" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=officemanagement" class="course-img" style="background-image: url(images/officskill.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=officemanagement">Office Management (CERT)</a></h3>
							<p>Office Management & Certification. Get certified today at Trafgoo.Edu. <br>This office management course is suitable for personal assistants, secretaries and administrative staff. the course will help participants gain essentail typing and IT office skill.</p>
							<span><a href="{{route('goToPage')}}?page=officemanagement" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=photoshop" class="course-img" style="background-image: url(images/photoshop.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=photoshop">Photoshop (CERT)</a></h3>
							<p>Photoshop & Certification. Get certified today at Trafgoo.Edu. <br>This photoshop course walk through fundamentals, image editing and more. Learnv how to use photo editing software with online tutorials from Trafgoo.Edu</p>
							<span><a href="{{route('goToPage')}}?page=photoshop" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=photographer" class="course-img" style="background-image: url(images/photographer.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=photographer">Professional Photographer (CERT)</a></h3>
							<p>& Certification. Get certified today at Trafgoo.Edu. <br>Our beginner photography course are created to be quick and easy to understand for beginner photographers and are desiged to take biginner to an advanced...</p>
							<span><a href="{{route('goToPage')}}?page=photographer" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=productionperfume" class="course-img" style="background-image: url(images/prodetergent.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=productionperfume">Production of Detergents/Perfumes</a></h3>
							<p>Through education and community programs, the soap and detergent industry helps consumers learn how to reduce waste and also learn how to produce liquid soap and detergent for house hold use. Trafgoo is here to teach you more.</p>
							<span><a href="{{route('goToPage')}}?page=productionperfume" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=shoemanufacturing" class="course-img" style="background-image: url(images/shoe.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=shoemanufacturing">Shoe manufacturing (CERT)</a></h3><br>
							<p>Shoe Making & Certification. Get certified today at Trafgoo.Edu. <br>Learn how to make footwears with our online courses. Our shoe making courses have train the best footwear professionals covering all useful topics to enter the footwear industry.<br><br><br></p>
							<span><a href="{{route('goToPage')}}?page=shoemanufacturing" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=solarenergy" class="course-img" style="background-image: url(images/Solar-panel.png);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=solarenergy">Solar Energy installation (CERT)</a></h3>
							<p>Solar Energy Installation & Certification. Get certified today at Trafgoo.Edu. <br>This course was designed for anyone who wants to know the ins and outs of solar PV Energy. it is a perfect for beginners, with zero solar experience.</p>
							<span><a href="{{route('goToPage')}}?page=solarenergy" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=videoediting" class="course-img" style="background-image: url(images/videoediting.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=videoediting">Video Editing Course (CERT)</a></h3>
							<p>Video Editing & Certification. Get certified today at Trafgoo.Edu. <br>These Online video course have everything you need to start putting together high production value from home. creating beautiful engaging videos is easier than ever before with modern digital video editing suites</p>
							<span><a href="{{route('goToPage')}}?page=videoediting" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=wallpaper" class="course-img" style="background-image: url(images/wallpaper.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=wallpaper">3D Wallpaper/panel</a></h3><br>
							<p>Get the best training on 3D panel, wallpaper installation and interior design. enroll yourself and learn both the theoretical and pratical aspect of home decoration.<br><br><br></p>
							<span><a href="{{route('goToPage')}}?page=wallpaper" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="{{route('goToPage')}}?page=youtuber" class="course-img" style="background-image: url(images/youtuber.jpg);">
						</a>
						<div class="desc">
							<h3><a href="{{route('goToPage')}}?page=youtuber">YouTuber</a></h3>
							<p>Learn how to create a successful YouTube channel, create engaging videos people want to share, optimize your videos for higher visibility, take advantage of YouTube SEO, get more video views and channel subscribers,and monetize your channel.</p>
							<span><a href="{{route('goToPage')}}?page=youtuber" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Testimonials</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/defualttut.png);"></div>
									<span>Umeh Peter<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;I think the experience and the exposure to different teaching styles has given me a different perspective about life and what i really want to do.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/defualttut.png);"></div>
									<span>Benson Obinna<br><small>Students</small></span>
									<blockquote>
										<p>&ldquo;Very impressive, helpful and i am comfortable because i can do it at my own pace.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<div class="user" style="background-image: url(images/defualttut.png);"></div>
									<span>David Rita<br><small>Teacher</small></span>
									<blockquote>
										<p>&ldquo;Learning is like sport...you only get better with pratice. Trafgoo makes this both fun and effective.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog &amp; Events</h2>
					<p>Our updates bring you the latest news about Scholarships, Trafgoo update, Job update, interships update and T-News</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				

				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Feb.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/2Hqpm9M">2021 OECD Internship Programme In Paris-France For Young Students</a></h3>
						<p>Host Country: Paris, France <br>Category: Undergraduate & Graduate Internship <br>Eligible Countries: All Countries <br>Reward: Full Sponsorship<br>Deadline: February 28</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/2Hqpm9M">Read More</a></p>
					</div>
				</div>
				


				

				

				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>2o<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/2FSYX3S">2020 World Bank Blog4Dev Essay Competition For Young Africans (Chance to Intern at World Bank)</a></h3>
						<p>Youth Transforming Africa (YTA) is a World Bank-supported youth engagement initiative that aims to engage more African youth in the thinking and discussions on development in Africa.<br>

Category: Sub-Saharan Africans | Ages (18-28 Yrs)<br>

Prize: Numerous<br>

Deadline: November 30, 2020</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/2FSYX3S">Read More</a></p>
					</div>
				</div>




				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/3jTLozh">2021 Cisco Global Problem Solver Challenge For Entrepreneurs ($1 Million USD Cash Prize)</a></h3>
						<p>Category: Entrepreneurs<br>

How to Participate:<br>
 • Register to Participate<br>
 • Prepare your Submission<br>
 • Submit Your Solution<br>
 • Vote and Promote<br>
 • Celebrate the Winners<br>

Prize:  $1 million USD, spread across 20 different awards.<br>

NB: Winners will be announced on June 29, 2021<br>

Deadline: January 29, 2021<br></p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/3jTLozh">Read More</a></p>
					</div>
				</div>



			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="{{route('goToPage')}}?page=#" class="blog-img-holder" style="background-image: url(images/QWER.jpg);"></a>
						<div class="blog-text">
							<h3><a href="{{route('goToPage')}}?page=#">Register And Stand A Chance to Win Prizes</a></h3>
							<span class="posted_on">November. 20th</span>
							<span class="comment"><a href="{{route('goToPage')}}?page=">211<i class="icon-speech-bubble"></i></a></span>
							<p>Show your friends how to Learn and Earn money on TRAFGOO.<br>Trafgoo gives you seven times your investment and offers you the opportunity to learn. Don't learn alone tell your friends about trafgoo and stand a chance to win our weekly prize.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="{{route('goToPage')}}?page=#" class="blog-img-holder" style="background-image: url(images/WEBE.jpg);"></a>
						<div class="blog-text">
							<h3><a href="{{route('goToPage')}}?page=#">Earning Graph</a></h3>
							<span class="posted_on">November. 20th</span>
							<span class="comment"><a href="{{route('goToPage')}}?page=">342<i class="icon-speech-bubble"></i></a></span>
							<p>In this program we have Max 8, Mid 4 and Mini 0;<br> Max 8 is the highest pay bar.<br> Mid 4 is the average bar, at this point the bar either increase or decrease. <br>  Mini 0, once the bar reaches the MINIMUMZERO you lose your investment, so avoid investing on the red bar {below the Mid 4} by doing so you reduce the rate of losing your investment.</p>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="{{route('goToPage')}}?page=#" class="blog-img-holder" style="background-image: url(images/payincrease.jpg);"></a>
						<div class="blog-text">
							<h3><a href="{{route('goToPage')}}?page=#">Payment Card</a></h3>
							<span class="posted_on">November. 20th</span>
							<span class="comment"><a href="{{route('goToPage')}}?page=">561<i class="icon-speech-bubble"></i></a></span>
							<p>The colour of your card will determine when to recieve your payout</p>
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
					<p><a href="{{route('goToPage')}}?page=register" class="btn btn-primary btn-lg btn-reg">Click Here To Register!</a></p>
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
						<li><a href="{{route('goToPage')}}?page=courses">Course</a></li>
						<li><a href="{{route('goToPage')}}?page=blog">Blog</a></li>
						<li><a href="{{route('goToPage')}}?page=contact">Contact</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Terms</a></li>
						<li><a href="{{route('goToPage')}}?page=#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="{{route('goToPage')}}?page=blog">Blog</a></li>
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
	</body>
</html>

