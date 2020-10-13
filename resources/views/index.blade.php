<!DOCTYPE html>
  @include('head')
  <body>
    <div class="apecsaos-wrapper">
      <!-- START SCOPE HEADER -->
      <!-- <header class="header-wrapper">
        <div class="container">
          <div class="box-header">
            <div class="introduce">
              <span>
                Selamat datang di PT. Baga Putra Mandiri
              </span>
            </div>
            <div class="content">
              <ul>
                <li>
                  <div class="icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <span>admin@apecsa-indonesia.com</span>
                </li>
                <li>
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <span>(021) 234 454</span>
                </li>
                <li>
                  <div class="icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <span>Cilandak, Jakarta Selatan</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header> -->
      <!-- END SCOPE HEADER -->

      <!-- START SCOPE NAVBAR BOOTSTRAP -->
      @include('menu')
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
      <!-- END SCOPE CAROUSEL SLIDER -->

      <!-- START SCOPE DEVELOPMENT CATEGORIES -->
      <section class="development-categories bg-gray">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section" style="font-size:14px">Welcome to Trafagoo</span>
              </div>
              <div class="desc color-black">
                Invest and win more
              </div>
			  <div class="desc color-black">
                <h2 align="center">HOW TO PLAY</h2>
        <hr>
        <div style="text-align: justify;"> Show your friends how to earn money on TRAFGOO. Remember you earn extra money on each person that register through your link (Username). You must register at least two (2) people.
          <hr style="background-color:whi;color:black;border-width: 10px;">
        In this program we have Max 8, Mid 4 and Mini 0;<br> Max 8 is the highest pay bar.<br> Mid 4 is the average bar, at this point the bar either increase or decrease. <br>  Mini 0, once the bar reaches the MINIMUMZERO you lose your investment, so avoid investing on the red bar {below the Mid 4} by doing so you reduce the rate of losing your investment.<br></p>
          <hr>
 No matter how long it takes to refer someone you can still get both your investment and the profit unless the bar you invest on reduces to Mini 0 (crash).<br><br><br></p>
<p align="center">
  <img src="{{asset('assets/images/WEBQ.jpg')}}" style="width: 90%;height: 40%"><br><br>
  <b>NEVADA BRIDGE MOBILE TV</b></p>
  <p style="padding-left: 30px"> NEVADA bridge tv is an online tv that stream Africa movies situated in Atlanta GA Actors & Actresses Entertainment Celebrity Arts & Culture Industry News Arts <br>
  </p>
  <h4 align="center">PLANS & PRICING</h4>
<p style="padding-left: 30px">
    <p ul style="list-style-type: circle;">
<li>Thousands of TV shows, movies & more.</li>
<li>1 month unlimited access!</li>
<li>Unlimited access, quaterly.</li>
<li>1 year unlimited access!</li>
</ul>
<p style="padding-left: 30px"> for more info visit: www.nevadabridgetv.com</p><br><br>
</p>
   <p align="center">
   <img src="{{asset('assets/images/WEBZAA.jpg')}}" style="width:90%;height:40%">
</p>

<p>
Trafgoo provides the best outdoor advertising services which are focused in marketing.<br>
Advertisement is recognized as an apparent tie between seller and the consumer. As most people spend their 70 percent of time outside the house, these outdoor advertisements is taking a tactical approach to influence the customers.<br> 
These Outdoor advertising services from Trafgoo include billboards, bus, internet, interiors, and exteriors.<br><br>
When an advertiser pays for the message whether through print media or electronic media, the origin of modern advertising has happened. This online/outdoor advertising is also considered as mass marketing strategies such as radio, TV, Cinema, and many more. We are providing the best Online/Outdoor Advertising services</p><br><br></p></div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- START SCOPE FOOTER -->
      @include('footer')
      <!-- END SCOPE FOOTER -->
      <a href="" id="back-to-top" data-toggle="tooltip" data-placement="top" title="Back to top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
  </body>

  <!-- SCOPE JAVASCRIPT -->
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
</html>
