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
                Selamat datang di PT. Apecsa Optima Solusi
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
      <div class="adresses">
        <div class="list-data">
          <ul>
            <li>
              <div class="icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <div class="info">
                @lang('sentences.company_address')
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="info">
			     @lang('sentences.ph_numb') +6288809615182 <br/>
				 Whatsapp +6281286949932
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="info">
                manullang_d@yahoo.com
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END SCOPE INFORMATION ADDRESS -->
      
      <!-- START SCOPE FORM CONTACT US -->
      <section class="bg-white">
	    @if(session()->has('message'))
			<div class="alert alert-success text-center">
				<h2>{{ session()->get('message') }}</h2>
			</div>
		@endif
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-white">@lang('sentences.contact_us')</span>
              </div>
             </div>
          </div>
          <div class="col-md-8 col-md-offset-2">
            <div class="tab-form-contact">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#contact-project" aria-controls="contact-project" role="tab" data-toggle="tab">
                    <i class="fa fa-check-circle"></i>
                    @lang('sentences.i_wanna_talk')
                  </a>
                </li>
                <li role="presentation">
                  <a href="#contact-say" aria-controls="contact-say" role="tab" data-toggle="tab">
                    <i class="fa fa-check-circle"></i>
                    @lang('sentences.i_just_wanna_say')
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="contact-project">
                  <form action="{{route('submit_customer_talk_project')}}" method="post">
				  {{ csrf_field() }} 
                    <div class="col-md-6">
                      <label for="full_name">* @lang('sentences.full_name')</label>
                      <input type="text" name="full_name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="col-md-6">
                      <label for="email">* Email</label>
                      <input type="email" name="email" class="form-control" placeholder="E.x: yourname@email.com" required>
                    </div>
                    <div class="col-md-6">
                      <label for="phone">* @lang('sentences.phone')</label>
                      <input type="text" name="phone" class="form-control" placeholder="E.x: 0857 xxx xxx xxx">
                    </div>
                    <div class="col-md-6">
                      <label for="company_name">@lang('sentences.your_company')</label>
                      <input type="text" name="company_name" class="form-control" placeholder="Your company name">
                    </div>
                    <div class="col-md-6">
                      <label for="where_find_us">@lang('sentences.where_did_find_us')</label>
                      <select name="where_find_us" class="form-control">
                        <option value="google">Google Search</option>
                        <option value="friend">@lang('sentences.friend')</option>
                        <option value="forum">forum</option>
                        <option value="others">@lang('sentences.other')</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="budget">@lang('sentences.your_budget')</label>
                      <select name="budget" class="form-control" required>
                        <option value="20000000-50000000">IDR. 20.000.000 - IDR.50.000.000</option>
                        <option value="50000000-100000000">IDR. 50.000.000 - IDR.100.000.000</option>
                        <option value="100000000-250000000">IDR. 100.000.000 - IDR.250.000.000</option>
                        <option value="250000000-500000000">IDR. 250.000.000 - IDR.500.000.000</option>
                        <option value="500000000-1000000000">IDR. 500.000.000 - IDR.1000.000.000</option>
                        <option value="1000000000-1500000000">IDR. 1.000.000.000 - IDR.1.500.000.000</option>
                        <option value="1500000000-2000000000">IDR. 1.500.000.000 - IDR.2.000.000.000</option>
						<option value="200000000-4000000000">IDR. 2.000.000.000 - IDR.4.000.000.000</option>
						<option value="400000000-8000000000">IDR. 4.000.000.000 - IDR.8.000.000.000</option>
						<option value="800000000-12000000000">IDR. 8.000.000.000 - IDR.12.000.000.000</option>
						<option value="1200000000-20000000000">IDR. 12.000.000.000 - IDR.20.000.000.000</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label for="website_url">@lang('sentences.url')</label>
                      <input type="url" name="website_url" class="form-control" placeholder="E.x: http://yoururldomain.com/">
                    </div>
                    <div class="col-md-12">
                      <label for="message">@lang('sentences.tell_us_a_bit_about')</label>
                      <textarea class="form-control" cols="10" rows="10" placeholder="your message" name="message" required></textarea>
                    </div>
                    <div class="col-md-12">
                      <label for="file">@lang('sentences.doc')</label>
                      <input type="file" name="file">
                    </div>
                    <div class="col-md-12">
                      <br>
                      <button type="submit" class="btn btn-lg btn-apecsa-red">
                        <i class="fa fa-send"></i>
                        @lang('sentences.submit')
                      </button>
                    </div>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="contact-say">
                  <form action="{{route('submit_customer_just_say')}}" method="post">
				    {{ csrf_field() }} 
                    <div class="col-md-6">
                      <label for="full_name">* @lang('sentences.full_name')</label>
                      <input type="text" class="form-control" name="full_name" placeholder="John Doe" required>
                    </div>
                    <div class="col-md-6">
                      <label for="email">* Email</label>
                      <input type="email" class="form-control" name="email" placeholder="E.x: yourname@email.com" required>
                    </div>
                    <div class="col-md-6">
                      <label for="phone">* @lang('sentences.phone')</label>
                      <input type="text" class="form-control" name="phone" placeholder="E.x: 0857 xxx xxx xxx" required>
                    </div>
                    <div class="col-md-6">
                      <label for="company_name">@lang('sentences.your_company')</label>
                      <input type="text" class="form-control" name="company_name" placeholder="Your company name">
                    </div>
                    <div class="col-md-12">
                      <label for="message">@lang('sentences.message')</label>
                      <textarea class="form-control" cols="10" name="message" rows="10" placeholder="message" required></textarea>
                    </div>
                    <div class="col-md-12">
                      <br>
                      <button type="submit" class="btn btn-lg btn-apecsa-red">
                        <i class="fa fa-send"></i>
                        @lang('sentences.submit')
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE FORM CONTACT US -->

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
</html>