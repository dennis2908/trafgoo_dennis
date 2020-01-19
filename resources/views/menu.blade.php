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
                  <img src="assets/images/logo/logo2.png" alt="ApecsaOS">
                </a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-apecsaos">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="{{route('index')}}">@lang('sentences.home')</a></li>
                  <li><a href="{{route('aboutus')}}">@lang('sentences.about_us')</a></li>
                  <li><a href="{{route('services')}}">@lang('sentences.our_services')</a></li>
                  <li><a href="{{route('portfolio')}}">@lang('sentences.portofolio')</a></li>
                  <li><a href="{{route('contactus')}}">@lang('sentences.contact_us')</a></li>
				  
				  <li><a href="{{ url('lang/id') }}" ><img src="{{asset('img/id.png')}}" width='30px'/> ID</a></li>

				  <li><a href="{{ url('lang/en') }}" ><img src="{{asset('img/en.png')}}" width='30px'/> EN</a></li>


				  
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