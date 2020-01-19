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
      
      <!-- START SCOPE SUB HEADER -->
      <section class="sub-header parallax-apecsa bg-portfolio">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="title">
              Our Portfolio
            </div>
            <div class="description">
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE SUB HEADER -->
      
      <!-- START SCOPE LIST PORTFOLIO -->
      <section class="list-portfolio bg-white">
        <div class="container">
          <div class="col-md-4">
            <a class="image-portfolio" data-toggle="modal" data-target="#modal-portfolio-1">
              <div class="box-image">
                <img src="assets/images/portfolio/skillagogo.png" alt="Portfolio PT. Baga Putra Mandiri">
              </div>
            </a>
            <div class="modal modal-fullscreen fade" id="modal-portfolio-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-portfolio-detail">
                    <div class="col-md-12">
                      <div class="title-top">
                        <span>Skillagogo</span>
                        <div class="icon">
                          <button type="button" class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="content">
                        <div class="image">
                          <img src="assets/images/portfolio/skillagogo.png" alt="Skillagogo">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <aside class="sidebar">
                        <div class="title-sidebar">
                          Project Info
                        </div>
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-user"></i>
                                Client
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-tag"></i>
                                Type
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-map-marker"></i>
                                Location
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-server"></i>
                                Technolgies
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-block btn-apecsa-red">
                          <i class="fa fa-link"></i>
                          Link website
                        </a>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <a class="image-portfolio" data-toggle="modal" data-target="#modal-portfolio-2">
              <div class="box-image">
                <img src="assets/images/portfolio/mikrobiz.png" alt="Portfolio PT. Baga Putra Mandiri">
              </div>
            </a>
            <div class="modal modal-fullscreen fade" id="modal-portfolio-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-portfolio-detail">
                    <div class="col-md-12">
                      <div class="title-top">
                        <span>Mikrobiz | Microfinance</span>
                        <div class="icon">
                          <button type="button" class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="content">
                        <div class="image">
                          <img src="assets/images/portfolio/mikrobiz.png" alt="Skillagogo">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <aside class="sidebar">
                        <div class="title-sidebar">
                          Project Info
                        </div>
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-user"></i>
                                Client
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-tag"></i>
                                Type
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-map-marker"></i>
                                Location
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-server"></i>
                                Technolgies
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-block btn-apecsa-red">
                          <i class="fa fa-link"></i>
                          Link website
                        </a>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <a class="image-portfolio" data-toggle="modal" data-target="#modal-portfolio-3">
              <div class="box-image">
                <img src="assets/images/portfolio/mirakle.png" alt="Portfolio PT. Baga Putra Mandiri">
              </div>
            </a>
            <div class="modal modal-fullscreen fade" id="modal-portfolio-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-portfolio-detail">
                    <div class="col-md-12">
                      <div class="title-top">
                        <span>Mirakle Automotif</span>
                        <div class="icon">
                          <button type="button" class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="content">
                        <div class="image">
                          <img src="assets/images/portfolio/mirakle.png" alt="Skillagogo">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <aside class="sidebar">
                        <div class="title-sidebar">
                          Project Info
                        </div>
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-user"></i>
                                Client
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-tag"></i>
                                Type
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-map-marker"></i>
                                Location
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-server"></i>
                                Technolgies
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-block btn-apecsa-red">
                          <i class="fa fa-link"></i>
                          Link website
                        </a>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <a class="image-portfolio" data-toggle="modal" data-target="#modal-portfolio-4">
              <div class="box-image">
                <img src="assets/images/portfolio/multibangunpatria.png" alt="Portfolio PT. Baga Putra Mandiri">
              </div>
            </a>
            <div class="modal modal-fullscreen fade" id="modal-portfolio-4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-portfolio-detail">
                    <div class="col-md-12">
                      <div class="title-top">
                        <span>Multi Bangun Patria</span>
                        <div class="icon">
                          <button type="button" class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="content">
                        <div class="image">
                          <img src="assets/images/portfolio/multibangunpatria.png" alt="Skillagogo">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <aside class="sidebar">
                        <div class="title-sidebar">
                          Project Info
                        </div>
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-user"></i>
                                Client
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-tag"></i>
                                Type
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-map-marker"></i>
                                Location
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-server"></i>
                                Technolgies
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                        </div>
                        <a href="#" class="btn btn-lg btn-block btn-apecsa-red">
                          <i class="fa fa-link"></i>
                          Link website
                        </a>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <a class="image-portfolio" data-toggle="modal" data-target="#modal-portfolio-5">
              <div class="box-image">
                <img src="assets/images/portfolio/rkpd_tasikmalaya.png" alt="Portfolio PT. Baga Putra Mandiri">
              </div>
            </a>
            <div class="modal modal-fullscreen fade" id="modal-portfolio-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-portfolio-detail">
                    <div class="col-md-12">
                      <div class="title-top">
                        <span>rkpd kota tasikmalaya</span>
                        <div class="icon">
                          <button type="button" class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="content">
                        <div class="image">
                          <img src="assets/images/portfolio/rkpd_tasikmalaya.png" alt="Skillagogo">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <aside class="sidebar">
                        <div class="title-sidebar">
                          Project Info
                        </div>
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-user"></i>
                                Client
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-tag"></i>
                                Type
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-map-marker"></i>
                                Location
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-server"></i>
                                Technolgies
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                        </div>
                        <a href="http://rkpd.tasikmalayakota.go.id/" target="_blank" class="btn btn-lg btn-block btn-apecsa-red">
                          <i class="fa fa-link"></i>
                          Link website
                        </a>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <a class="image-portfolio" data-toggle="modal" data-target="#modal-portfolio-6">
              <div class="box-image">
                <img src="assets/images/portfolio/plasadana.png" alt="Portfolio PT. Baga Putra Mandiri">
              </div>
            </a>
            <div class="modal modal-fullscreen fade" id="modal-portfolio-6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-portfolio-detail">
                    <div class="col-md-12">
                      <div class="title-top">
                        <span>Plasa Dana | Your inspiration Your Money</span>
                        <div class="icon">
                          <button type="button" class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="content">
                        <div class="image">
                          <img src="assets/images/portfolio/plasadana.png" alt="Skillagogo">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <aside class="sidebar">
                        <div class="title-sidebar">
                          Project Info
                        </div>
                        <div class="panel-group">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-user"></i>
                                Client
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-tag"></i>
                                Type
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-map-marker"></i>
                                Location
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <i class="fa fa-server"></i>
                                Technolgies
                              </h4>
                            </div>
                            <div class="panel-body">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ullam, repellat delectus sit asperiores, necessitatibus porro nisi illum voluptatum ab repudiandae placeat minus possimus nemo velit quos qui id ipsam.
                            </div>
                          </div>
                        </div>
                        <a href="http://plasadana.com/" target="_blank" class="btn btn-lg btn-block btn-apecsa-red">
                          <i class="fa fa-link"></i>
                          Link website
                        </a>
                      </aside>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="text-center">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE LIST PORTFOLIO -->

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
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.scrolltofixed.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.scrollspeed.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    // .modal-backdrop classes
    $(".modal-transparent").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-transparent");
      }, 0);
    });

    $(".modal-transparent").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-transparent");
    });

    $(".modal-fullscreen").on('show.bs.modal', function () {
      setTimeout( function() {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
      }, 0);
    });

    $(".modal-fullscreen").on('hidden.bs.modal', function () {
      $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    });
  </script>
</html>
