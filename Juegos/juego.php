<html>
    <head>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/cssjuego.css" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet">

        <title>Macedonia</title>
      <link rel="icon" type="image/png" href="img/piña.png"/>
    </head>
<body>


  <?php 
  
    include_once("../navbar.php");
  
  ?>

    
<div class="contenedor" style="margin-top: 0%">
<div id="capanieve"></div>
  <h1 id="salida" class="border 1px">MACEDONIA</h1>

    <h2 id="puntos" class="border 1px">Puntos</h2>
    
    <div class="pantalla" id="pantalla" style="left: 30%; top: 20%">
        <div class="fruta" id="rojo" data-izquierda="false"></div>
        <div class="fruta" id="amarillo" data-izquierda="true"></div>
        <div class="fruta med" id="naranja" data-izquierda="true"></div>
        <div class="fruta med" id ="blanco" data-izquierda="true"></div>
        <div class="fruta" id ="azul" data-izquierda="true"></div>
        <div class="fruta" id ="verde" data-izquierda="true"></div>
        <div class="macedonia"></div>
        <div class="macedonia" id="cuenta"></div>
        <button class="macedonia" id="empezar">Empezar</button>
        <button class="macedonia" id="siguiente">Siguiente Juego</button>


        
    </div>

</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="juegocopia.js"></script>

 <!-- Vendor JS Files -->
 <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>