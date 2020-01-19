<!DOCTYPE html>
<html>
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
                data-thumb="assets/images/slider/slider_4.jpg"
                data-saveperformance="off"
                data-title="We are Awsome">
                <img
                  src="assets/images/slider/slider_4.jpg"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat">
              </li>

              <li
                data-transition="curtain-3"
                data-slotamount="1"
                data-masterspeed="1300"
                data-thumb="assets/images/slider/slider_1.jpg"
                data-saveperformance="off"
                data-title="With Awsome Services">
                <img
                  src="assets/images/slider/slider_1.jpg"
                  alt=""
                  data-bgposition="center top"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat">
              </li>
              <li
                data-transition="slideright"
                data-slotamount="1"
                data-masterspeed="1300"
                data-thumb="assets/images/slider/slider_4.jpg"
                data-saveperformance="off"
                data-title="We are Awsome">
                <img
                  src="assets/images/slider/slider_4.jpg"
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
                <span class="bg-section">Development Categories</span>
              </div>
              <div class="desc color-black">
                We build application based system,Website Development, web based system, mobile based system and more 
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="box-categories">
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-desktop"></i>
                      </div>
                    </div>
                    <div class="title">
                      Website Development
                    </div>
                    <div class="description">
                      <p>
                        We always start from blank canvas to design each of our projects. We love new ideas that we can incorporate in designing websites.
                      </p>
                    </div>
                  </div>
                </div>
				<div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-desktop"></i>
                      </div>
                    </div>
                    <div class="title">
                      Web Based System Development
                    </div>
                    <div class="description">
                      <p>
                        We always start from blank canvas to design each of our projects. We love new ideas that we can incorporate in designing websites.
                      </p>
                    </div>
                  </div>
                </div>
				<div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-desktop"></i>
                      </div>
                    </div>
                    <div class="title">
                      Application Development
                    </div>
                    <div class="description">
                      <p>
                        We always start from blank canvas to design each of our projects. We love new ideas that we can incorporate in designing websites.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-mobile"></i>
                      </div>
                    </div>
                    <div class="title">
                      Mobile Based Application Development
                    </div>
                    <div class="description">
                      <p>
                        We always start from blank canvas to design each of our projects. We love new ideas that we can incorporate in designing websites.
                      </p>
                    </div>
                  </div>
                </div>
				<div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-mobile"></i>
                      </div>
                    </div>
                    <div class="title">
                      Mobile Based System Development
                    </div>
                    <div class="description">
                      <p>
                        We always start from blank canvas to design each of our projects. We love new ideas that we can incorporate in designing websites.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-heart"></i>
                      </div>
                    </div>
                    <div class="title">
                      Search Engine Optimation
                    </div>
                    <div class="description">
                      <p>
                        We always start from blank canvas to design each of our projects. We love new ideas that we can incorporate in designing websites.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE DEVELOPMENT CATEGORIES -->

      <!-- START SCOPE BUSSINESS PROCESS -->
      <section class="bussiness-process bg-red-pink">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-red-pink color-white">Bussiness Process</span>
              </div>
              <div class="desc color-white">
                Our business process starts with requesting development                
			  </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="stepwizard">
              <div class="stepwizard-row">
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-default btn-circle">
                    <i class="fa fa-user"></i>
                  </button>
                  <p class="color-white">Requesting Development</p>
                </div>
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-default btn-circle">
                    <i class="fa fa-gear"></i>
                  </button>
                  <p class="color-white">Reviewing request</p>
                </div>
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-default btn-circle">
                    <i class="fa fa-bars"></i>
                  </button>
                  <p class="color-white">Discussing requirement</p>
                </div> 
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-default btn-circle">
                    <i class="fa fa-refresh"></i>
                  </button>
                  <p class="color-white">Development phase</p>
                </div>
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-default btn-circle">
                    <i class="fa fa-bank"></i>
                  </button>
                  <p class="color-white">Testing Acceptance Test</p>
                </div>
				<div class="stepwizard-step">
                  <button type="button" class="btn btn-default btn-circle">
                    <i class="fa fa-bank"></i>
                  </button>
                  <p class="color-white">Finalizing phase</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE BUSSINESS PROCESS -->

      <!-- START SCOPE DEVELOPMENT PROCCESS -->
      <section class="development-process bg-gray">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">Development Process</span>
              </div>
              <div class="desc color-black">
                We use fast development process                 
			  </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="stepwizard">
              <div class="stepwizard-row">
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-success btn-circle">1</button>
                  <p>Requirement</p>
                </div>
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-success btn-circle">2</button>
                  <p>Developement</p>
                </div>
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-success btn-circle">3</button>
                  <p>Testing</p>
                </div> 
                <div class="stepwizard-step">
                  <button type="button" class="btn btn-success btn-circle">4</button>
                  <p>Finalizing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE DEVELOPMENT PROCCESS -->

      <!-- START SCOPE INTRODUCE PORTFOLIO -->
      <section class="parallax-apecsa bg-img-1 introduce-wrapper portfolio">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-white">
                <span class="color-white">Portfolio</span>
              </div>
              <div class="desc color-white">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eaque, quisquam blanditiis, voluptatibus, delectus nesciunt tenetur cupiditate quae facere voluptates nihil saepe tempora laboriosam alias a quod! Libero, ipsum, blanditiis.
              </div>
              <a href="contactus.html" class="btn btn-apecsa-red btn-lg">
                <i class="fa fa-bars"></i>
                Lihat Semua
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE INTRODUCE PORTFOLIO -->

      <!-- START SCOPE TESTIMONIAL CLIENT -->
      <section class="testimonial-client">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">Testimonial Client</span>
              </div>
              <div class="desc color-black">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eaque, quisquam blanditiis, voluptatibus, delectus nesciunt tenetur cupiditate quae facere voluptates nihil saepe tempora laboriosam alias a quod! Libero, ipsum, blanditiis.
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box-testimonial" id="owl-slide-testimonial">
              <div class="col-lg-12">
                <div class="item list-testimonial">
                  <div class="box-quote">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, officia nesciunt, voluptates dolores suscipit alias deleniti reiciendis? Sequi, voluptate sunt repellat laudantium ex mollitia corporis. Culpa possimus laborum, beatae voluptatum.
                    </p>
                  </div>
                  <div class="box-client">
                    <div class="box-avatar">
                      <div class="avatar">
                        <img src="assets/images/client/fathan.jpg" alt="">
                      </div>
                    </div>
                    <div class="box-name-wrapper">
                      <div class="name">
                        <span class="name">
                          Fathan Rohman - 
                          <span class="position">Frontend Developer</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item list-testimonial">
                  <div class="box-quote">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni laborum, consectetur saepe accusantium a optio facilis minima reprehenderit ipsa nobis provident, sapiente labore iste necessitatibus quibusdam pariatur. Est, tempore!
                    </p>
                  </div>
                  <div class="box-client">
                    <div class="box-avatar">
                      <div class="avatar">
                        <img src="assets/images/client/fathan.jpg" alt="">
                      </div>
                    </div>
                    <div class="box-name-wrapper">
                      <div class="name">
                        <span class="name">
                          Fathan Rohman - 
                          <span class="position">Frontend Developer</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item list-testimonial">
                  <div class="box-quote">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, officia nesciunt, voluptates dolores suscipit alias deleniti reiciendis? Sequi, voluptate sunt repellat laudantium ex mollitia corporis. Culpa possimus laborum, beatae voluptatum.
                    </p>
                  </div>
                  <div class="box-client">
                    <div class="box-avatar">
                      <div class="avatar">
                        <img src="assets/images/client/fathan.jpg" alt="">
                      </div>
                    </div>
                    <div class="box-name-wrapper">
                      <div class="name">
                        <span class="name">
                          Fathan Rohman - 
                          <span class="position">Frontend Developer</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item list-testimonial">
                  <div class="box-quote">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni laborum, consectetur saepe accusantium a optio facilis minima reprehenderit ipsa nobis provident, sapiente labore iste necessitatibus quibusdam pariatur. Est, tempore!
                    </p>
                  </div>
                  <div class="box-client">
                    <div class="box-avatar">
                      <div class="avatar">
                        <img src="assets/images/client/fathan.jpg" alt="">
                      </div>
                    </div>
                    <div class="box-name-wrapper">
                      <div class="name">
                        <span class="name">
                          Fathan Rohman - 
                          <span class="position">Frontend Developer</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <a class="btn prev btn-default">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="btn next btn-default">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE TESTIMONIAL CLIENT -->

      <!-- START SCOPE INTRODUCE CONTACT US -->
      <!-- END SCOPE INTRODUCE CONTACT US -->

      <!-- START SCOPE FOOTER -->
      @include('footer')
      <!-- END SCOPE FOOTER -->
      <a href="" id="back-to-top" data-toggle="tooltip" data-placement="top" title="Back to top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
  </body>

  <!-- SCOPE JAVASCRIPT -->
  @include('footer_assets')
  <script>
    (function($) {

      "use strict";

      //Main Slider
      if($('.slider-apecsa .tp-banner').length){
        jQuery('.slider-apecsa .tp-banner').show().revolution({
          delay:10000,
          startwidth:1200,
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
          startWithSlide:0,
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
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,1], //2 items between 600 and 0
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
