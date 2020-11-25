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
      <section class="development-categories bg-gray">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
               @include('title')
			  <div class="desc color-black">
                <h2 align="center">Video Tutorial</h2>
        <hr>


   <style>
                   
                   *{
    
}
body{
    background-color:#000022;
    font-family: 'Fondamento', cursive;
    font-weight:bolder;
    
}
ul li{
	color:black;
}

ul a{
	color:black;
}
#btn{
    text-align:left;
    margin:0px;
	margin-top:-40px;
}
.puran{
    display:block;
    height:20rem;
    overflow: scroll;
    width:100vw;
    
}
hr{
    height:4px;
}

.card{
    text-align:center;
    background-color:black;
    color:black;
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
<h1 align="center" style="color:black">T-VIDEO</h1>
	<h2 style="text-align: center; color: black">Anti-aging Spa</h2><br><br>
	<iframe width="200" src="https://www.youtube.com/embed/T2M_euiG0Sw" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="200" src="https://www.youtube.com/embed/1ji8bux3QTk" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="200" src="https://www.youtube.com/embed/LEEoW87yXsE" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="200" src="https://www.youtube.com/embed/6HCXKcWRVhQ" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="200" src="https://www.youtube.com/embed/99Jpj-Uq-F8" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
	<iframe width="200" src="https://www.youtube.com/embed/1XVQl9I-50I" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>

TRF's Certificate courses are a range of free online courses that are designed to provide training that's as streamlined and to-the-point as possible.<br>

Built for learners of any ability or knowledge level, each of these free online classes takes less than 3 hours to complete and provides training in a single topic in clear detail.<br>

And with over 20 certificate courses available, whether you want to learn - for free - how to manage projects or take classes in a computer science related course, Trafgoo has the Certificate for you.<br><br>
Click To Register <a href="{{route('goToPage')}}?page={{route('goToPage')}}?page=paymentgate">(Conctact Our Agent For Your Registration Pin)</a> 
So, what will you learn today?


              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- START SCOPE FOOTER -->
      @include('footer')
      <!-- END SCOPE FOOTER -->
      <a href="{{route('goToPage')}}?page={{route('goToPage')}}?page=" id="back-to-top" data-toggle="tooltip" data-placement="top" title="Back to top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
  </body>
</html>
