<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog & Event</title>
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
		   	<li style="background-image: url(images/blogging.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Blog &amp; Events</h1>
									<h2>Brought to you by <a href="{{route('goToPage')}}?page=#" target="_blank">Tr#afgoo.Edu</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Blog &amp; Events</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
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
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/3pozrp9">2020 Internship at Interswitch Group for Nigerian Graduates</a></h3>
						<p>Category: Graduates | All Courses | Max Age 27yrs<br>Deadline: November 20, 2020</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/3pozrp9">Read More</a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://www.intelregion.com/scholarships/2020-shell-livewire-programme-for-young-nigerians/">2020 Shell LiveWIRE Programme For Young Nigerians</a></h3>
						<p>LiveWIRE Nigeria is a youth enterprise development programme supported by The Shell Petroleum Devlopment Company of Nigeria Limited (SPDC).<br>Category: Nigerian Youth (Age 18 - 35)<br>Benefits: Numerous</p>
						<p><a href="{{route('goToPage')}}?page=https://www.intelregion.com/scholarships/2020-shell-livewire-programme-for-young-nigerians/">Read More</a></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/3l9j8tC">2020 Startup North-East Virtual Incubation Program For Nigerian</a></h3>
						<p>Startups ($3,000 Free funding Prize)<br>Duration: 4-month <br>Benefits:<br>
 • Grant<br>
 • Business Advisory<br>
 • Partnerships<br>
Deadline: December 2, 2021</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/3l9j8tC">Read More</a></p>
					</div>
				</div>


				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/2Ih1Cp5">2021 Africa Union AfCFTA Innovation Challenge For Young Africans</a></h3>
						<p>Objective of the Challenge:<br>
						 • To identify and disseminate innovative ideas, solutions and actions which will maximize the benefits of the AfCFTA, especially for women and youth<br>

 • To enhance the capacity of young Africans for policy development and implementation<br>

 • To integrate young Africans into AfCFTA policy-making processes<br>

Reward: Numerous<br>

Deadline: November 23, 2020</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/2Ih1Cp5">Read More</a></p>
					</div>
				</div>


				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://www.intelregion.com/scholarships/2021-united-states-international-university-africa-usiu-africa-mastercard-foundation-scholarship/">2021 United States International University-Africa (USIU-Africa) MasterCard Foundation Scholarship</a></h3>
						<p>United States International University-Africa (USIU-Africa) has partnered with the Mastercard Foundation in its global Scholars Program.<br>

Host Country: United States of America U.S<br>

Category: Undergraduates<br>

Eligible Countries: African Countries<br> 

Reward: Tuition Fee | Laptop | Monthly stipend etc<br>

Deadline: November 27, 2020</p>
						<p><a href="{{route('goToPage')}}?page=https://www.intelregion.com/scholarships/2021-united-states-international-university-africa-usiu-africa-mastercard-foundation-scholarship/">Read More</a></p>
					</div>


</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/3mSyrrf">2020 NITDA Special Intervention Training for Graduates Unemployed Nigerian Youths</a></h3>
						<p>The Agency through its academy has developed a vocational training program with newly formed curriculums.

Benefit:<br>
 • Skill Acquisition<br>
 • Job Creation<br>
 • Post-training Program<br>

Deadline: N/A<br></p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/3mSyrrf">Read More</a></p>
					</div>
				</div>



<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://www.intelregion.com/scholarships/2020-master-card-foundation-transforming-nigerian-youths-program-for-young-nigerians/">2020 Master Card Foundation Transforming Nigerian Youths Program For Young Nigerians</a></h3>						
						<p>This program is brought to Nigeria by the Young Africa Works-Mastercard Foundation in partnership with the Enterprise Development Centre, Pan-Atlantic University<br>

*Category:* Entrepreneurs<br>

*Eligibility:* Be a Nigerian</p>
						<p><a href="{{route('goToPage')}}?page=https://www.intelregion.com/scholarships/2020-master-card-foundation-transforming-nigerian-youths-program-for-young-nigerians/">Read More</a></p>
					</div>




				</div><div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>20<br>Nov.</span></div>
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/3eItdvt">2021 Commonwealth Early Career Researcher Training Grants For African Researchers</a></h3>
						<p>Skills includes:<br>
 • Presentation skills<br>
 • Networking<br>
 • Time management<br>
 • Public engagement<br>
 • Media training<br>
 • Social media<br>
  • Relationship/stakeholder management<br>
 • Grant writing<br>
 • Career training, etc<br>

Reward: GBP 1000.<br>

Deadline: November 23, 2020.
</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/3eItdvt">Read More</a></p>
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
						<h3><a href="{{route('goToPage')}}?page=https://bit.ly/2JFkSNv">2021 Fully Funded Doha Institute for Graduate Studies Scholarships in Qatar</a></h3>
						<p>

Host Country: Qatar<br>

Category: Masters<br>

Eligible Countries: All Countries<br> 

Reward: Full Scholarship with Stipends<br> 

Deadline: February 15, 2021</p>
						<p><a href="{{route('goToPage')}}?page=https://bit.ly/2JFkSNv">Read More</a></p>
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
					<p><a href="{{route('goToPage')}}?page=register" class="btn btn-primary btn-lg btn-reg">Click Here TO Register!</a></p>
				</div>
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
	</body>
</html>

