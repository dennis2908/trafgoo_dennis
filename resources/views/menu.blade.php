<style>
.dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 10;
        margin-top: -1px;
        overflow-y: scroll;
		height:400px;
		width:auto;
		border-radius: 4px;	
    }
</style>
<div id="navbar-fixed-apecsaos">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="col-md-12">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-apecsaos" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                  <img src="assets/images/logo/logoTrafgoo.png" alt="ApecsaOS">
                </a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-apecsaos">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="{{route('index')}}">Home</a></li>
                  <li><a href="{{route('aboutus')}}">About Us</a></li>
                  <li><a href="{{route('buypin')}}">Buy Pin</a></li>
                  <li><a href="{{route('tq')}}">T&Q's</a></li>
				  <li class="dropdown-submenu">
                            <a class="submenu" data-toggle="dropdown" href="#">Tutorial<span class="caret"></span></a>
                            <ul class="dropdown-menu">
							  <li><a href="{{route('tutorial')}}?page=affiliate_marketing">Affiliate marketing Course (CERT)</a></li>
							  <li><a href="{{route('tutorial')}}?page=amazon_kindle_publishings">Amazon Kindle publishing Course (CERT)</a></li>
							  <li><a href="{{route('tutorial')}}?page=2d_adobe_animate">2D Adobe Aminate</a></li>
							  <li><a href="{{route('tutorial')}}?page=3d_adobe_animate">3D Adobe Aminate</a></li>
							  <li><a href="{{route('tutorial')}}?page=anti-aging_spa">Anti-aging Spa</a></li>
							  <li><a href="{{route('tutorial')}}?page=autocad_full_course">Auto CAD Full Course</a></li>
							  <li><a href="{{route('tutorial')}}?page=barbing_salon">Barbing Salon</a></li>
							  <li><a href="{{route('tutorial')}}?page=computer_laptop_repair">Computer/Laptop Repair</a></li>
							  <li><a href="{{route('tutorial')}}?page=custom_clothing">Custom Clothing</a></li>
							  <li><a href="{{route('tutorial')}}?page=drop_shipping">Drop Shipping</a></li>
							  <li><a href="{{route('tutorial')}}?page=fitness_instructor">Fitness instructor</a></li>
							  <li><a href="{{route('tutorial')}}?page=forex">Forex</a></li>
							  <li><a href="{{route('tutorial')}}?page=coreldraw">Coreldraw</a></li>
							  <li><a href="{{route('tutorial')}}?page=interior_decor">Interior Decor</a></li>
							  <li><a href="{{route('tutorial')}}?page=makeup_business">Makeup Business</a></li>
							  <li><a href="{{route('tutorial')}}?page=make_money_on_youtube">Make money on youtube</a></li>
							  <li><a href="{{route('tutorial')}}?page=niche_blogging">Niche Blogging</a></li>
							  <li><a href="{{route('tutorial')}}?page=office_skill_full_course">Office Skill Full Course</a></li>
							  <li><a href="{{route('tutorial')}}?page=production_and_saling_of_detergents">Production and saling of detergents/perfumes</a></li>
							  <li><a href="{{route('tutorial')}}?page=professional_photographer">Professional Photographer</a></li>
							  <li><a href="{{route('tutorial')}}?page=programming_html">Programming HTML</a></li>
							  <li><a href="{{route('tutorial')}}?page=sale_and_installation_of_3d">Sale and installation of 3D Wallpaper/panel</a></li>
							  <li><a href="{{route('tutorial')}}?page=shoe_manufacturing">Shoe Manufacturing</a></li>
							  <li><a href="{{route('tutorial')}}?page=solar_energy_installation">Solar Energy installation</a></li>
							  <li><a href="{{route('tutorial')}}?page=mathematics_101">Mathematics 101</a></li>
							  <li><a href="{{route('tutorial')}}?page=mathematics_102">Mathematics 102</a></li>
							  <li><a href="{{route('tutorial')}}?page=mathematics_201">Mathematics 201</a></li>
					        </ul>
                        </li>
				  <li><a href="{{route('ebook')}}">Ebook</a></li>
                  <li><a href="{{route('contactus')}}">Login</a></li>
				  
                </ul>
              </div>
            </div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
            </div>
			
          </div>
        </nav>
      </div>
	        <!-- END SCOPE NAVBAR BOOTSTRAP -->

      <!-- START SCOPE CAROUSEL SLIDER -->
      <div class="slider-apecsa">
        <div class="tp-banner-container">
          <div class="tp-banner">
            <ul>
              <!-- DATA TRANSITION OTHER
              boxslide
              boxfade
              slotzoom-horizontal
              slotslide-horizontal
              slotfade-horizontal
              slotzoom-vertical
              slotslide-vertical
              slotfade-vertical
              curtain-1
              curtain-2
              curtain-3
              slideleft
              slideright
              slideup
              slidedown
              fade -->
              <li
                data-transition="slotzoom-horizontal"
                data-slotamount="3"
                data-masterspeed="3000"
                data-thumb="{{asset('assets/images/webs1.jpg')}}"
                data-saveperformance="off"
                data-title="@lang('sentences.contact_us')">
                <img
                  src="{{asset('assets/images/payincrease.jpg')}}"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat" style="size:30%">
              </li>

              <li
                data-transition="curtain-3"
                data-slotamount="3"
                data-masterspeed="3000"
                data-thumb="{{asset('assets/images/webs1.jpg')}}"
                data-saveperformance="off"
                data-title="@lang('sentences.with_awesome_service')">
                <img
                  src="{{asset('assets/images/payincrease.jpg')}}"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat" style="size:30%">
              </li>
              <li
                data-transition="slideright"
                data-slotamount="3"
                data-masterspeed="3000"
                data-thumb="{{asset('assets/images/webs1.jpg')}}"
                data-saveperformance="off"
                data-title="@lang('sentences.we_are_awesome')">
                <img
                  src="{{asset('assets/images/payincrease.jpg')}}"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat" style="size:30%">
              </li>
            </ul>
            <div class="tp-bannertimer"></div>
          </div>
        </div>
      </div> 
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/js/jquery.scrolltofixed.js')}}"></script>
  <script src="{{asset('assets/js/revolution.min.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
  <script src="{{asset('assets/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.scrollspeed.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
	 <script>
    (function($) {

      "use strict";

      //Main Slider
      if($('.slider-apecsa .tp-banner').length){
        jQuery('.slider-apecsa .tp-banner').show().revolution({
          delay:1000,
          startwidth:1,
          startheight:310,
          hideThumbs:300,

          thumbWidth:80,
          thumbHeight:50,
          thumbAmount:5,

          navigationType:"bullet",
          navigationArrows:"0",
          navigationStyle:"preview4",

          touchenabled:"on",
          onHoverStop:"off",

          swipe_velocity: 0.7,
          swipe_min_touches: 1,
          swipe_max_touches: 1,
          drag_block_vertical: false,

          parallax:"mouse",
          parallaxBgFreeze:"on",
          parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

          keyboardNavigation:"off",

          navigationHAlign:"center",
          navigationVAlign:"bottom",
          navigationHOffset:0,
          navigationVOffset:20,

          soloArrowLeftHalign:"left",
          soloArrowLeftValign:"center",
          soloArrowLeftHOffset:20,
          soloArrowLeftVOffset:0,

          soloArrowRightHalign:"right",
          soloArrowRightValign:"center",
          soloArrowRightHOffset:20,
          soloArrowRightVOffset:0,

          shadow:0,
          fullWidth:"on",
          fullScreen:"off",

          spinner:"spinner4",

          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,

          shuffle:"off",

          autoHeight:"off",
          forceFullWidth:"on",

          hideThumbsOnMobile:"on",
          hideNavDelayOnMobile:1500,
          hideBulletsOnMobile:"on",
          hideArrowsOnMobile:"on",
          hideThumbsUnderResolution:0,

          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          startWithSlide:1,
          videoJsPath:"",
          fullScreenOffsetContainer: ".slider-apecsa"
        });
      }

    })(window.jQuery);
	
    $(document).ready(function() {

      var owl = $("#owl-slide-testimonial");
     
      owl.owlCarousel({
          items : 100, //10 items above 1000px browser width
          itemsDesktop : [401,100], //5 items between 1000px and 901px
          itemsDesktopSmall : [301,100], // betweem 900px and 601px
          itemsTablet: [300,100], //2 items between 600 and 0
          itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
    });
  </script>