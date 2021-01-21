<?php
    $DEFAULT_LANG = "en";
    $currentPage = "index.php";

    if (isset($_POST['lang'])) {
        $_SESSION['language'] = $_POST['lang'];
    } else if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = $DEFAULT_LANG;
    }

  $contentFile = $_SERVER['DOCUMENT_ROOT'] . "/projecte2.github.io/assets/content/" . $_SESSION['language'] . ".json";
  $contentJson = file_get_contents($contentFile);
  $content = json_decode($contentJson, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $content["index"]["pagetitle"]; ?></title>
  
  <!-- Favicons -->
  <link rel="icon" type="image/png" href="assets/img/logo.png"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <?php 

    include_once("navbar.php");

  ?>
  
  <!-- ======= titulo ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1><?php echo $content["index"]["titleh1"]; ?></h1>
      <h2><?php echo $content["index"]["titleh2"]; ?></h2>
    </div>
  </section><!-- End titulo -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><?php echo $content["index"]["abouth2"]; ?></h2>
            <h3><?php echo $content["index"]["abouth3"]; ?></h3>          
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              <?php echo $content["index"]["aboutp1"]; ?>
            </p>
            <ul> 
              <li><i class="ri-check-double-line"></i> <?php echo $content["index"]["aboutli1"]; ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo $content["index"]["aboutli2"]; ?></li>
              <li><i class="ri-check-double-line"></i> <?php echo $content["index"]["aboutli3"]; ?></li>
            </ul>
            <p class="font-italic">
              <?php echo $content["index"]["aboutp2"]; ?>
            </p>
          </div>
        </div>

      </div>
    </section>


    <!-- ======= Ofertas especiales ======= -->
    <section id="why-us" class="oferdest">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content" style="height: 100%;">
              <div><img src="assets/img/ofertflash.png" class="img-fluid" width="100%" height="100%" alt=""></div>
              <h4><u><?php echo $content["index"]["specialoffer1h4"]; ?></u></h4>
              <p>
              <?php echo $content["index"]["specialoffer1p"]; ?>
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><?php echo $content["index"]["specialoffercanjear"]; ?> <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content" style="height: 100%;">
            <div><img src="assets/img/ofertdia.png" class="img-fluid" width="100%" height="70%" alt=""></div><br><br><br>
              <h4><u><?php echo $content["index"]["specialoffer2h4"]; ?></u></h4>
              <p>
              <?php echo $content["index"]["specialoffer2p"]; ?>
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><?php echo $content["index"]["specialoffercanjear"]; ?> <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content" style="height: 100%;">
            <div><img src="assets/img/ofertmes.png" class="img-fluid" width="50%" height="0%" style="margin-left: 25%;"></div>
              <h4><u><?php echo $content["index"]["specialoffer3h4"]; ?></u></h4>
              <p>
              <?php echo $content["index"]["specialoffer3p"]; ?>
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"><?php echo $content["index"]["specialoffercanjear"]; ?> <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

          
        </div>
        </div>

      </div>
    </section>

    <!-- ======= Ofertas ======= -->
    <section id="ofertas" class="ofertas section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2><?php echo $content["index"]["offerh2"]; ?></h2>
              <p><?php echo $content["index"]["offerp"]; ?></p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div><img src="assets/img/20-porciento.png" class="img-fluid" width="70%" height="70%" alt=""></div>
                  <h4><a href=""><?php echo $content["index"]["offer1h4"]; ?></a></h4>
                  <p><?php echo $content["index"]["offer1p"]; ?></p>
                  <br>
                  <div class="text-center border fixed-bottom" id="canjear" style="margin-bottom: 20px; margin-right: 20px; margin-left: 20px">
                    <a href="#about"><?php echo $content["index"]["specialoffercanjear"]; ?></a></li>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div><img src="assets/img/2x1ofert.png" class="img-fluid" width="80%" height="80%"></div>
                  <h4><a href=""><?php echo $content["index"]["offer2h4"]; ?></a></h4>
                  <p><?php echo $content["index"]["offer2p"]; ?></p>
                    <br>
                    <div class="text-center border fixed-bottom" style="margin-bottom: 20px; margin-right: 20px; margin-left: 20px">
                    <a href="#about"><?php echo $content["index"]["specialoffercanjear"]; ?></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div><img src="assets/img/ofertanavid.png" class="img-fluid" width="70%" height="70%"></div>
                  <h4><a href=""><?php echo $content["index"]["offer3h4"]; ?></a></h4>
                  <p><?php echo $content["index"]["offer2p"]; ?></p>
                  <br>
                  <div class="text-center border  fixed-bottom" style="margin-bottom: 20px; margin-right: 20px; margin-left: 20px">
                    <a href="#about"><?php echo $content["index"]["specialoffercanjear"]; ?></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                <div><img src="assets/img/ofertaesp.png" class="img-fluid" width="100%" height="100%"></div><br>
                  <h4><a href=""><?php echo $content["index"]["offer4h4"]; ?></a></h4>
                  <p><?php echo $content["index"]["offer4p"]; ?></p><br>
                  <div class="text-center border fixed-bottom" style="margin-bottom: 20px; margin-right: 20px; margin-left: 20px">
                    <a href="#about"><?php echo $content["index"]["specialoffercanjear"]; ?>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- Fin Ofertas -->

    <!-- ======= Tiendas ======= -->
    <section id="tiendas" class="tiendas">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2><?php echo $content["index"]["tiendash2"]; ?></h2>
              <p><?php echo $content["index"]["tiendasp"]; ?></p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="tienda" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="assets/img/mercat-de-sants.jpg" class="img-fluid" width="100%" height="100%"></div>
                  <div class="tienda-info">
                    <h4><?php echo $content["index"]["tienda1h4"]; ?></h4>
                    <span><?php echo $content["index"]["tienda1span"]; ?></span>
                    <p><?php echo $content["index"]["tiendaphone"]; ?> 934 13 22 29</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="tienda" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/mercat-de-clot.jpg" class="img-fluid" width="100%" height="100%"></div>
                  <div class="tienda-info">
                    <h4><?php echo $content["index"]["tienda2h4"]; ?></h4>
                    <span><?php echo $content["index"]["tienda2span"]; ?></span>
                    <p><?php echo $content["index"]["tiendaphone"]; ?>932 65 90 90</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="tienda" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/mercat-de-les-corts.jpg" class="img-fluid" width="100%" height="100%"></div>
                  <div class="tienda-info">
                    <h4><?php echo $content["index"]["tienda3h4"]; ?></h4>
                    <span><?php echo $content["index"]["tienda3span"]; ?></span>
                    <p><strong>Email: </strong>info@mercatdelescorts.cat</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="tienda" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="assets/img/mercat-de-lesseps.jpeg" class="img-fluid" width="100%" height="100%"></div>
                  <div class="tienda-info">
                    <h4><?php echo $content["index"]["tienda4h4"]; ?></h4>
                    <span><?php echo $content["index"]["tienda4span"]; ?></span>
                    <p><?php echo $content["index"]["tiendaphone"]; ?>934 13 23 19</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- Fin Tiendas -->

   
  </main><!-- Fin #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
        <?php echo $content["index"]["alumnos"]; ?>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="github"><i class="bx bxl-github"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>