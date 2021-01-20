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
            <h1 class="text-light"><a href="/projecte2.github.io/index.php"><span>Mercado Barcelona</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/projecte2.github.io/index.php #hero">Home</a></li>
                    <li><a href="/projecte2.github.io/index.php #ofertas">Ofertas</a></li>
                    <li><a href="/projecte2.github.io/index.php #tiendas">Tiendas</a></li>
                
                    



                    <?php if(isset($_SESSION['Id_user'])){ 


                        foreach($usuarios as $usuario){ ?>

                            <li class="drop-down"><a href="/projecte2.github.io/juegos.php">Juegos</a>
                                <ul>
                                    <li><a href="/projecte2.github.io/Juegos/juego.php">Fruteria</a></li>
                                    <li><a href="/projecte2.github.io/Juegos/recogercarne.php">Carniceria</a></li>
                                    <li><a href="/projecte2.github.io/Juegos/cesta.php">Panaderia</a></li>
                                    <li><a href="/projecte2.github.io/Juegos/rompecabezas.php">Pescaderia</a></li>
                                </ul>
                            </li>

                        <li class="drop-down"><i class="bx bx-user-circle bx-md" style="margin-right: 5px; color: #7583ff;"></i>
                            <ul style="margin-left : -50px; border-radius: 8px; border: 2px solid #7583ff;">

                                <form action="php_library/bd_controller.php" method="POST">
                                    
                                        <li style="margin: 5px;" id="infouser"><?php echo $usuario['Email'] ?></li>
                                        <li style="margin: 5px;" id="infouser"><?php echo "Puntos: " . $usuario['Puntos']  ?></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><button type="submit" name="cerrarses" id="cerrarses" style="float: right; margin-right:5px; border: none; background-color: white; margin-top:10px"><i class="bx bx-power-off bx-sm" style="color: #7583ff;" ></i></button></li>
                                
                                </form>
                            </ul>

                        </li> 

                    <?php } 

                        } else{ ?>

                            <li class="drop-down" id="botones_sesion"><label for="correo" class="col-form-label">Iniciar sesión</label>

                                <ul id="columsess">

                                    <h5 id="titulosess">Entra en tu perfil</h5>

                                    <form action="php_library/bd_controller.php" method="POST" enctype="multipart/form-data">

                                            
                                            <li id="iniciarsess"><input class="form-control" type="email" name="correo" placeholder="Correo Electrónico"></li>

                                            <li id="iniciarsess"><input class="form-control" type="password" name="password" placeholder="Contraseña"></li>  

                                            <button type="submit" id="botonsess" name="iniciarsess">Entrar</button>  


                                      
                                    </form>

                                </ul>

                            </li>

                            <li class="drop-down" id="botones_sesion"><label for="registrar" class="col-form-label">Registrarse</label>

                                <ul id="columsess">

                                    <h5 id="titulosess">Create una cuenta</h5>

                                    <form action="php_library/bd_controller.php" method="POST" enctype="multipart/form-data">

                                        <li id="iniciarsess"><input class="form-control" type="email" name="correo" placeholder="Correo Electrónico" required></li>

                                        <li id="iniciarsess"><input class="form-control" type="password" name="password" placeholder="Contraseña" required></li>

                                        <button type="submit" id="botonsess" name="botoncrear">Crear cuenta</button>

                                    </form>

                                </ul>

                            </li>
                        
                        <?php } ?>
                
                    </ul>
                </nav><!-- .nav-menu -->
            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->
    
    <?php if(isset($_SESSION['error']) == true){ ?>

        <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
        </div>

    <?php } ?>

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