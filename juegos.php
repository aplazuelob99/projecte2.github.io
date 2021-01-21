<?php
    $DEFAULT_LANG = "en";
    $currentPage = "juegos.php";

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
        <title><?php echo $content["juegosmain"]["pagetitle"]; ?></title>
        
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
        <link href="assets/css/juegos.css" rel="stylesheet">
    
    </head>

    <body>

       <?php 
       
        include_once("navbar.php");
       
       ?>

        <section id="juegos" class="tiendas" style="margin-top: 3%;">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4">

                        <div class="section-title" data-aos="fade-right">

                            <h2><?php echo $content["juegosmain"]["titleh2"]; ?></h2>

                            <p><?php echo $content["juegosmain"]["titlep"]; ?></p>

                        </div>

                    </div>

                    <div class="col-lg-8">

                        <div class="row">

                            <div class="col-lg-6">

                                <a href="Juegos/juego.php" style="text-decoration:none;color:black;">
                            
                                    <div class="tienda" data-aos="zoom-in" data-aos-delay="100" style="background-color:white;">

                                        <div class="pic"><img src="assets/img/Capturaeric.png" class="img-fluid" width="100%" height="100%"></div>

                                        <div class="tienda-info">

                                            <h4><?php echo $content["juegosmain"]["juego1h4"]; ?></h4>

                                            <?php echo $content["juegosmain"]["juego1instrucciones"]; ?>

                                        </div>

                                    </div>
                            
                                </a>
                                
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">


                                <a href="Juegos/recogercarne.php" style="text-decoration:none;color:black;">
                            
                            
                                    <div class="tienda" data-aos="zoom-in" data-aos-delay="200" style="background-color:white;">

                                        <div class="pic"><img src="assets/img/Capturaplazu.png" class="img-fluid" width="100%" height="100%"></div>

                                        <div class="tienda-info">

                                        <h4><?php echo $content["juegosmain"]["juego2h4"]; ?></h4>
                                        <?php echo $content["juegosmain"]["juego2instrucciones"]; ?>

                                        </div>

                                    </div>
                            
                                </a>
                                

                            </div>

                            <div class="col-lg-6 mt-4">


                                <a href="Juegos/cesta.php" style="text-decoration:none;color:black;">

                                    <div class="tienda" data-aos="zoom-in" data-aos-delay="300" style="background-color:white;">

                                        <div class="pic"><img src="assets/img/Capturacarles.png" class="img-fluid" width="100%" height="100%"></div>

                                        <div class="tienda-info">

                                        <h4><?php echo $content["juegosmain"]["juego3h4"]; ?></h4>
                                        <?php echo $content["juegosmain"]["juego3instrucciones"]; ?>

                                        </div>

                                    </div>

                            
                                </a>
                                

                            </div>



                            <div class="col-lg-6 mt-4">
                                

                                <a href="Juegos/rompecabezas.php" style="text-decoration:none;color:black;">
                            
                                    <div class="tienda" data-aos="zoom-in" data-aos-delay="400" style="background-color:white;">
                                
                                        <div class="pic"><img src="assets/img/Capturacristian.png" class="img-fluid" width="100%" height="100%"></div>
                
                                        <div class="tienda-info">

                                        <h4><?php echo $content["juegosmain"]["juego4h4"]; ?></h4>
                                        <?php echo $content["juegosmain"]["juego4instrucciones"]; ?>
   
                                        </div>

                                    </div>
                            
                                </a>
                               

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- Fin Tiendas -->

        




        <!-- ======= Footer ======= -->
        <footer id="footer">

    

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                <?php echo $content["juegosmain"]["alumnos"]; ?>
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