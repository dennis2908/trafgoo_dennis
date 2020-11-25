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
                <h2 align="center">Registration</h2>
        <hr>
        <div style="text-align: justify;">For Registration visit any of our office:</h2><hr>

<h4 align="center"> 18, Banjo Street, Ojoelegba, Surulere, Lagos.<br><br><br>


165 Aba Road, Suite 109, First Floor Waterlines Junction Port Harcourt, Port Harcourt, Rivers<br><br><br>


Suite 315, Second Floor, Anbeez Plaza, Wuse Zone 5, Abuja<br><br><br>


Or <br><br><br>


<img src="{{asset('assets/images/whatsappme.png')}}" width="30px" height="30px"><a href="{{route('goToPage')}}?page=https://wa.me/2347081405096"><button><h4 style="color: blue">Contact Our Agent for Registration (PIN)</h4></button></a><br><br>

<img src="{{asset('assets/images/whatsappme.png')}}" width="30px" height="30px"><a href="{{route('goToPage')}}?page=https://chat.whatsapp.com/Jto9We7J5cJGkChsOQnvmV"><button><h4 style="color: blue">Join the whatsApp Group</h4></button></a>

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- START SCOPE FOOTER -->
      @include('footer')
      <!-- END SCOPE FOOTER -->
      <a href="{{route('goToPage')}}?page=" id="back-to-top" data-toggle="tooltip" data-placement="top" title="Back to top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
  </body>
</html>
