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
                data-slotamount="1"
                data-masterspeed="1000"
                data-thumb="{{asset('assets/images/webs1.jpg')}}"
                data-saveperformance="off"
                data-title="@lang('sentences.contact_us')">
                <img
                  src="{{asset('assets/images/payincrease.jpg')}}"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat">
              </li>

              <li
                data-transition="curtain-3"
                data-slotamount="1"
                data-masterspeed="1000"
                data-thumb="{{asset('assets/images/webs1.jpg')}}"
                data-saveperformance="off"
                data-title="@lang('sentences.with_awesome_service')">
                <img
                  src="{{asset('assets/images/payincrease.jpg')}}"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat">
              </li>
              <li
                data-transition="slideright"
                data-slotamount="1"
                data-masterspeed="1000"
                data-thumb="{{asset('assets/images/webs1.jpg')}}"
                data-saveperformance="off"
                data-title="@lang('sentences.we_are_awesome')">
                <img
                  src="{{asset('assets/images/payincrease.jpg')}}"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat">
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
                <span class="bg-section">Welcome to Trafagoo</span>
              </div>
              <div class="desc color-black">
                Invest and win more
              </div>
			  <div class="desc color-black">
                <h2 align="center">ABOUT US</h2>
        <hr>
        <div style="text-align: justify;">Trafgoo is a registered trading name with M-Tech trading Networks.<br>
Our technology centre is based in Nigeria, to ensure the reliability and security of our systems and your transactions.<br>
Our customer facing operations are based in Lagos to ensure the customer experience is unparalleled.<br>
Trafgo set the standard for online excellence in Nigeria.Secure and reliable<br>
Trafgo works with the best operators in the world to guarantee the best trading/gaming conditions.<br>
The computer system and data are protected.<br>
Remember: Your winnings are real.
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
          startheight:620,
          hideThumbs:600,

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
  </script>
  <script>
    $(document).ready(function() {

      var owl = $("#owl-slide-testimonial");
     
      owl.owlCarousel({
          items : 100, //10 items above 1000px browser width
          itemsDesktop : [1900,100], //5 items between 1000px and 901px
          itemsDesktopSmall : [1250,100], // betweem 900px and 601px
          itemsTablet: [1300,100], //2 items between 600 and 0
          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
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
