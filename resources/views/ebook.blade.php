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
               <br><br>
               <div class="puran" >
           <br><br>
           <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="{{asset('assets/pictures/WEBPDF2.jpg')}}" style="width: 8.9rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h6 class="card-title">Rich Dad Poor Dad</h6>
                                <a href="{{asset('assets/ebooks/Rich-Dad-Poor-Dad.pdf')}}" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div>
		   <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="{{asset('assets/pictures/pre-calculusfordummies.jpg')}}" style="width: 8.9rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h6 class="card-title">Pre-Calculus For Dummies</h6>
                                <a href="{{asset('assets/ebooks/Pre-Calculus-For-Dummies.pdf')}}" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div>
		   <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="{{asset('assets/pictures/basicengimaths.jpg')}}" style="width: 8.9rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h6 class="card-title">Basic Engine Maths</h6>
                                <a href="{{asset('assets/ebooks/Basic-Engineering-Mathematic.pdf')}}" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div>
		   <div class="iteams"  id="puran">
              <div class="card" style="width: 10rem; height:13rem; margin:4px;float:auto;margin-left:5px"  class="bg-dark" > 
                  <img src="{{asset('assets/pictures/computerhacking.jpg')}}" style="width: 8.9rem;height:53%" class="card-img-top" alt="TRAFGOO"> 
                      <div class="card-body"> 
                          <h6 class="card-title">Computer Hacking</h6>
                                <a href="{{asset('assets/ebooks/Computer-Hacking.pdf')}}" class="btn btn-primary" id="btn"><button style="color:blue" >READ</button></a>
                                    
                                </div> 
                                </div>
           </div> 
           </div>
         </div>
         <br><br>

<h3 align="center"><hr> Free Online Courses with Certificates<hr></h3>

TRF's Certificate courses are a range of free online courses that are designed to provide training that's as streamlined and to-the-point as possible.<br>

Built for learners of any ability or knowledge level, each of these free online classes takes less than 3 hours to complete and provides training in a single topic in clear detail.<br>

And with over 20 certificate courses available, whether you want to learn - for free - how to manage projects or take classes in a computer science related course, Trafgoo has the Certificate for you.<br><br>
Click To Register <a href="paymentgate.html">(Conctact Our Agent For Your Registration Pin)</a> 
So, what will you learn today?


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
</html>