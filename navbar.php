<?php 
session_start();



require_once("php_library/bd.php");

if(isset($_SESSION['Id_user'])){

  $usuarios = iniciarsess($_SESSION['Id_user']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
        <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
            <h1 class="text-light"><a href="/projecte2.github.io/index.php"><span><?php echo $content["navbar"]["mercat"]; ?></span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/projecte2.github.io/index.php #hero"><?php echo $content["navbar"]["home"]; ?></a></li>
                    <li><a href="/projecte2.github.io/index.php #ofertas"><?php echo $content["navbar"]["oferta"]; ?></a></li>
                    <li><a href="/projecte2.github.io/index.php #tiendas"><?php echo $content["navbar"]["shops"]; ?></a></li>
                
                    <li class="drop-down"> <i class='bx bx-world bx-sm' style="color: #7583ff; padding: 2px; margin-top: 5px;"></i>
                        <ul>
                            <li>
                                <form action="<?php echo $currentPage ?>" method="post">
                                    <input type="hidden" name="lang" value="es" />
                                        <button type="submit" class="dropdown-item" id="idioma">Castellano</button>
                                    </form>
                            </li>
                            <li>
                                <form action="<?php echo $currentPage ?>" method="post">
                                    <input type="hidden" name="lang" value="ca" />
                                        <button type="submit" class="dropdown-item" id="idioma">Català</button>
                                </form>    
                            </li>
                            <li>
                                <form action="<?php echo $currentPage ?>" method="post">
                                    <input type="hidden" name="lang" value="en" />
                                        <button type="submit" class="dropdown-item" id="idioma">English</button>
                                </form>
                            </li>
                        </ul>
                    </li>



                    <?php if(isset($_SESSION['Id_user'])){ 


                        foreach($usuarios as $usuario){ ?>

                            <li class="drop-down"><a href="/projecte2.github.io/juegos.php"><?php echo $content["navbar"]["juegos"]; ?></a>
                                <ul>
                                    <li><a href="/projecte2.github.io/Juegos/juego.php"><?php echo $content["navbar"]["fruteria"]; ?></a></li>
                                    <li><a href="/projecte2.github.io/Juegos/recogercarne.php"><?php echo $content["navbar"]["carniceria"]; ?></a></li>
                                    <li><a href="/projecte2.github.io/Juegos/cesta.php"><?php echo $content["navbar"]["panaderia"]; ?></a></li>
                                    <li><a href="/projecte2.github.io/Juegos/rompecabezas.php"><?php echo $content["navbar"]["pescaderia"]; ?></a></li>
                                </ul>
                            </li>

                        <li class="drop-down"><i class="bx bx-user-circle bx-md" style="margin-right: 5px; color: #7583ff;"></i>
                            <ul style="margin-left : -50px; border-radius: 8px; border: 2px solid #7583ff;">

                                <form action="php_library/bd_controller.php" method="POST">
                                    
                                        <li style="margin: 5px;" id="infouser"><?php echo $usuario['Email'] ?></li>
                                        <li style="margin: 5px;" id="infouser"><?php echo "Puntos: " . $usuario['Puntos']  ?></li>
                                        <li><button type="submit" name="cerrarses" id="cerrarses" style="float: right; margin-right:5px; border: none; background-color: white; margin-top:10px"><i class="bx bx-power-off bx-sm" style="color: #7583ff;" ></i></button></li>
                                
                                </form>
                            </ul>

                        </li> 

                    <?php } 

                        } else{ ?>

                            <li class="drop-down" id="botones_sesion"><label for="correo" class="col-form-label"><?php echo $content["navbar"]["login"]; ?></label>

                                <ul id="columsess">

                                    <h5 id="titulosess"><?php echo $content["navbar"]["loginh5"]; ?></h5>

                                    <form action="php_library/bd_controller.php" method="POST" enctype="multipart/form-data">

                                            
                                            <li id="iniciarsess"><input class="form-control" type="email" name="correo" placeholder="<?php echo $content["navbar"]["loginemail"]; ?>"></li>

                                            <li id="iniciarsess"><input class="form-control" type="password" name="password" placeholder="<?php echo $content["navbar"]["loginpassword"]; ?>"></li> 

                                            <button type="submit" id="botonsess" name="iniciarsess"><?php echo $content["navbar"]["loginbuton"]; ?></button>  

                                    </form>

                                </ul>

                            </li>

                            <li class="drop-down" id="botones_sesion"><label for="registrar" class="col-form-label" autofocus><?php echo $content["navbar"]["register"]; ?></label>

                                <ul id="columsess">

                                    <h5 id="titulosess"><?php echo $content["navbar"]["registerh5"]; ?></h5>

                                    <form action="php_library/bd_controller.php" method="POST" enctype="multipart/form-data">

                                        <li id="iniciarsess"><input class="form-control" type="email" name="correo" placeholder="<?php echo $content["navbar"]["registeremail"]; ?>" required></li>

                                        <li id="iniciarsess"><input class="form-control" type="password" name="password" placeholder="<?php echo $content["navbar"]["registerpassword"]; ?>" required></li>

                                        <button type="submit" id="botonsess" name="botoncrear"><?php echo $content["navbar"]["registerbutton"]; ?></button>

                                    </form>

                                </ul>

                            </li>
                        
                        <?php } ?>
                
                    </ul>

                </nav>

                    
                    

            </div>
        </div>

        <?php if(isset($_SESSION['unico']) == true){ ?>

            <div class="alert" style="margin: 10px; background-color: gold; border: 2px solid goldenrod;" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
            <?php echo $content["navbar"]["correoexiste"]; ?>
            
            </div>
            <?php unset($_SESSION['unico']); ?>


        <?php } ?>

        <?php if(isset($_SESSION['error']) == true){ ?>

            <div class="alert" style="margin: 10px; background-color :gold; border: 2px solid goldenrod;" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $content["navbar"]["correoincorrecto"]; ?>
            
            </div>
            <?php unset($_SESSION['error']); ?>

        <?php } ?>


    </header>
    

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
</html>