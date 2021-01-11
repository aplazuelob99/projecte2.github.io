<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="styles/cssrompecabezas.css" type="text/css">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="script_rompecabezas.js" language="javascript" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Rompecabezas</title>
    <link rel="icon" type="image/png" href="imagenes_puzzle/puzzle.png"/>

</head>
<body>
  

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container">
        <div class="header-container d-flex align-items-center">
          <div class="logo mr-auto">
            <h1 class="text-light"><a href="../index.php"><span>Mercat Barcelona</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="drop-down"><a href="../juegos.php">Juegos</a>
                <ul>
                  <li><a href="juego.php">Fruteria</a></li>
                  <li><a href="recogercarne.php">Carniceria</a></li>
                  <li><a href="cesta.php">Panaderia</a></li>
                </ul>
              </li>
              <li><a href="../index.php #ofertas">Ofertas</a></li>
              <li class="active"><a href="../index.php">Salir</a></li>
                          
              <!-- <li class="get-started"><a href="#about">Iniciar session</a></li>
              <li class="get-started"><a href="#about">Registrarse</a></li> -->
            </ul>
          </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
      </div>
    </header><!-- End Header -->


    
          <div class="sidenav">
            <br><br>
            <h4> <div class="cuentaregresiva"> Cuenta Regresiva</div></h4>
            <h2><span id="countdown"></span></h2>
             <a href="#">puntuación</a>
            <div class="parrafo">
              <p>completa el puzzle para pasar al 
                  siguiente nivel.
              </p>
            </div>
            
            <div id="botonfondo" class="container">
              <a href="../index.php"><img src="Imagenes_puzzle/home.png" height="30" width="45" alt="Botón"></a>
            </div> 

            <button onclick="finalizado()">Pulsa el boton solamente cuando hayas finalizado el puzzle</button>

            <p id="demo" style="color: white;"></p>

          </div>
        

      
          <svg width="600" height="600" id="entorno">
            <g id="fondo"><image xlink:href="Imagenes_puzzle/fondo.jpg" width="400" height="400" x="180" y="60"></g>
          <g class="padre" id="0"><image xlink:href="Imagenes_puzzle/pieza01.png" class="movil"></g>
          <g class="padre" id="1"><image xlink:href="Imagenes_puzzle/pieza02.png" class="movil"></g>
          <g class="padre" id="2"><image xlink:href="Imagenes_puzzle/pieza03.png" class="movil"></g>
          <g class="padre" id="3"><image xlink:href="Imagenes_puzzle/pieza04.png" class="movil"></g>
          <g class="padre" id="4"><image xlink:href="Imagenes_puzzle/pieza05.png" class="movil"></g>
          <g class="padre" id="5"><image xlink:href="Imagenes_puzzle/pieza06.png" class="movil"></g>
          <g class="padre" id="6"><image xlink:href="Imagenes_puzzle/pieza07.png" class="movil"></g>
          <g class="padre" id="7"><image xlink:href="Imagenes_puzzle/pieza08.png" class="movil"></g>
          <g class="padre" id="8"><image xlink:href="Imagenes_puzzle/pieza09.png" class="movil"></g>
        </svg>

      

        <div class="ganador">
          
        </div>

        <br>
        
        <button type="button" id="siguiente" class="border 2px"> Siguiente Juego</button>
        
       

        <audio id="win" src="media/victoria.mp3"></audio>
          
        <script type="text/javascript" src="script_rompecabezas.js"></script>



</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>