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

      <!-- START SCOPE SUB HEADER -->
      <section class="sub-header parallax-apecsa bg-service">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="title">
              @lang('sentences.our_services')
            </div>
            <div class="description">
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE SUB HEADER -->
      
      <!-- START SCOPE WHAT WE DO -->
      <section class="development-categories bg-gray">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">What we do</span>
              </div>
              <div class="desc color-black">
                Product and service offered by Baga Putra Mandiri consists of
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
                      Software as a Service (SAAS)
                    </div>
                    <div class="description">
                      <p>
                        E‒government Suite (E-Budgeting, E-Planning, E-Monitoring), ERP (Enterprise Resource Planning System)
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
                      ICT Consultant
                    </div>
                    <div class="description">
                      <p>
                        Website development, Mobile apps Development, Custom Software
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-server"></i>
                      </div>
                    </div>
                    <div class="title">
                      Design & Branding Consultant
                    </div>
                    <div class="description">
                      <p>
                        Logo Design, Office Kit (Business Card, Letterhead, Envelope, Stamp, Map), Communication Kit (Brochure, Flyer, Catalogue), Company Profile, Illustration, Photography
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE WHAT WE DO -->

      <!-- START SCOPE BUSSINESS PROCCESS DETAIL -->
      <!-- <section class="bg-white">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-white">Business process</span>
              </div>
              <div class="desc color-black">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eaque, quisquam blanditiis, voluptatibus, delectus nesciunt tenetur cupiditate quae facere voluptates nihil saepe tempora laboriosam alias a quod! Libero, ipsum, blanditiis.
              </div>
            </div>
          </div>
          <div class="col-md-8 col-md-offset-2">
            <ul class="timeline">
              <li>
                <div class="timeline-badge"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Title</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime pariatur cupiditate, modi vel deserunt, velit minus tenetur optio, qui sit nemo itaque obcaecati! Quidem unde eveniet reprehenderit aspernatur, vero!
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Title</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime pariatur cupiditate, modi vel deserunt, velit minus tenetur optio, qui sit nemo itaque obcaecati! Quidem unde eveniet reprehenderit aspernatur, vero!
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Title</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime pariatur cupiditate, modi vel deserunt, velit minus tenetur optio, qui sit nemo itaque obcaecati! Quidem unde eveniet reprehenderit aspernatur, vero!
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Title</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime pariatur cupiditate, modi vel deserunt, velit minus tenetur optio, qui sit nemo itaque obcaecati! Quidem unde eveniet reprehenderit aspernatur, vero!
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Title</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime pariatur cupiditate, modi vel deserunt, velit minus tenetur optio, qui sit nemo itaque obcaecati! Quidem unde eveniet reprehenderit aspernatur, vero!
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge"><i class="fa fa-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Title</h4>
                  </div>
                  <div class="timeline-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maxime pariatur cupiditate, modi vel deserunt, velit minus tenetur optio, qui sit nemo itaque obcaecati! Quidem unde eveniet reprehenderit aspernatur, vero!
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section> -->
      <!-- END SCOPE BUSSINESS PROCCESS DETAIL -->

      <!-- START SCOPE DEVELOPMENT PROCESS -->
      <!-- <section class="development-process-detail bg-white">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-white">Development process</span>
              </div>
              <div class="desc color-black">
                
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- END SCOPE DEVELOPMENT PROCESS -->

      <!-- START SCOPE BUSSINES MODEL -->
      
      <!-- END SCOPE BUSSINES MODEL -->

      <!-- START SCOPE TECHNOLOGIES WE USE-->
      <section class="technologies-we-use">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">Technologies We Use</span>
              </div>
              <div class="desc color-black">
                Beberapa teknologi yang kami gunakan dalam tahap development
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="list-techno">
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="SASS">
                    <i class="devicon-sass-original"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Amazon Web Services">
                    <i class="devicon-amazonwebservices-original"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="PHP Storm">
                    <i class="devicon-phpstorm-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Apache">
                    <i class="devicon-apache-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Bitbucket">
                    <i class="devicon-bitbucket-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Twitter Bootstrap">
                    <i class="devicon-bootstrap-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Codeigniter">
                    <i class="devicon-codeigniter-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Confluence">
                    <i class="devicon-confluence-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="CSS3">
                    <i class="devicon-css3-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Djanggo">
                    <i class="devicon-django-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Git">
                    <i class="devicon-git-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Go">
                    <i class="devicon-go-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Gulp">
                    <i class="devicon-gulp-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="HTML5">
                    <i class="devicon-html5-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="jQuery">
                    <i class="devicon-jquery-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Laravel">
                    <i class="devicon-laravel-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="MySql">
                    <i class="devicon-mysql-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Nginx">
                    <i class="devicon-nginx-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Postgresql">
                    <i class="devicon-postgresql-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Python">
                    <i class="devicon-python-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Ruby">
                    <i class="devicon-ruby-plain"></i>
                  </div>
                </div>
                <div class="col-md-2 sm-3 col-xs-12">
                  <div class="box-list-tech" data-toggle="tooltip" data-placement="top" title="Ruby On Rails">
                    <i class="devicon-rails-plain"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE TECHNOLOGIES WE USE-->

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
  </html>