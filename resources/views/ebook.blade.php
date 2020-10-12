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
        <div style="text-align: justify;"><h1 style="text-align: center;">T-eBook
</h1>
    </header><br><br>


   <style>
                   
                   *{
    
}
body{
    background-color:#000022;
    font-family: 'Fondamento', cursive;
    font-weight:bolder;
    
}
.navbar-nav a{
    border-bottom:1px solid black;

}
ul li{
	color:black;
    display:flex;
}

ul a{
	color:black;
    display:flex;
}
#btn{
    text-align:left;
    margin:0px;
}
.puran{
    display:block;
    height:20rem;
    overflow: scroll;
    width:100vw;
    
}
hr{
    background-color:#fff;
    height:4px;
}
img{
    border:3px solid ;
}
.title{
    border-bottom:1px solid black;
    border-top:1px solid black;padding:4px;margin:4px;
    color:black;
}
.card{
    text-align:center;
    background-color:black;
    color:black;
     padding:4px;
     display:inline-block;
    margin:4px;
    border:1px solid black;
}
#puran{
    float: left;
    display:block;
    height:16rem;
    margin:0rem;
    width:auto;
}
.iteams{
    display:flex;
}
.title h1{
    font-size:20px;
}
               </style>
               <br><br>
               <div class="puran" >
           <br><br>
           <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="pictures/WEBPDF2.jpg" style="width: 9.7rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h5 class="card-title">Rich Dad Poor Dad</h5>
                                <a href="ebooks/Rich-Dad-Poor-Dad.pdf" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div>

            <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="pictures/pre-calculusfordummies.jpg" style="width: 9.7rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h5 class="card-title" style="font-size:12px;">Pre-Calculus For Dummies</h5>
                                <a href="ebooks/Pre-Calculus-For-Dummies.pdf" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div> 

            <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto; margin-left:5px; " class="bg-dark" > 
                  <img src="pictures/basicengimaths.jpg" style="width: 9.7rem;height:50%" class="card-img-top" alt="TRAFGOO">  
                      <div class="card-body"> 
                          <h5 class="card-title" style="font-size:15px;">Basic Engine Maths</h5>
                                <a href="ebooks/Basic-Engineering-Mathematic.pdf" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                </div>
                                 </div>
                                </div> 

                                <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="pictures/computerhacking.jpg" style="width: 9.7rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h5 class="card-title">Computer Hacking</h5>
                                <a href="ebooks/Computer-Hacking.pdf" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div>
           </div>
         </div>
         <br><br>


<h1 align="center">T-VIDEO</h1>

<video src="videos/php introductory tutorial.mp4" controls="controls" width="200px" style="padding: 5px"></video>
<video src="videos/videoedit.mp4" controls="controls" width="200px" style="padding: 5px"></video>
<video src="videos/php tutorial 1.mp4" controls="controls" width="200px" style="padding: 5px"></video>
<video src="videos/React js 1.mp4" controls="controls" width="200px" style="padding: 5px"></video>
<br><br>


<h3 align="center"><hr> Free Online Courses with Certificates<hr></h3>

TRF's Certificate courses are a range of free online courses that are designed to provide training that's as streamlined and to-the-point as possible.<br>

Built for learners of any ability or knowledge level, each of these free online classes takes less than 3 hours to complete and provides training in a single topic in clear detail.<br>

And with over 20 certificate courses available, whether you want to learn - for free - how to manage projects or take classes in a computer science related course, Trafgoo has the Certificate for you.<br><br>
Click To Register <a href="paymentgate.html">(Conctact Our Agent For Your Registration Pin)</a> 
So, what will you learn today?

<ul style="color: black">
  <br>
  <li><a href="#">Affiliate marketing Course (CERT)</a></li>
  <li><a href="#">Amazon Kindle publishing Course (CERT)</a></li>
  <li><a href="#">2D/3D Amination Course (CERT)</a></li>
  <li><a href="#">Auto CAD (CERT)</a></li>
  <li><a href="#">Bakery Business (CERT)</a></li>
  <li><a href="#">Barbing Salon (CERT)</a></li>
  <li><a href="#">Computer Repair (CERT)</a></li>
  <li><a href="#">Custom Clothing</a></li>
  <li><a href="#">Drop Shipping</a></li>
  <li><a href="#">Fitness instructor</a></li>
  <li><a href="#">Forex (CERT)</a></li>
  <li><a href="#">Graphics Design Course (CERT)</a></li>
  <li><a href="#">Interior Decor</a></li>
  <li><a href="#">Makeup Business</a></li>
  <li><a href="#">Make money on youtube</a></li>
  <li><a href="#">Niche Blogging</a></li>
  <li><a href="#">Office Skill Full Course (CERT)</a></li>
  <li><a href="#">Production and saling of detergents/perfumes</a></li>
  <li><a href="#">Professional Photographing Course (CERT)</a></li>
  <li><a href="#">Programming Course (CERT)</a></li>
  <li><a href="#"> installation of 3D Wallpaper</a></li>
  <li><a href="#">Shoe manufacturing</a></li>
  <li><a href="#">Solar Energy installation (CERT)</a></li>
  <li><a href="#">Video Editing Course(CERT)</a></li>
</ul>
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
