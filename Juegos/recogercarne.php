<?php
    $DEFAULT_LANG = "es";
    $currentPage = "recogercarne.php";

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
<html lang="es">
<head>
    <meta charset="utf-8"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="styles/cssrecoger.css" type="text/css">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <script src="script_recoger.js" language="javascript" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title><?php echo $content["juego2"]["gametitle"]; ?></title>
    <link rel="icon" type="image/png" href="img/Beef.png"/>

</head>
<body>


    <?php 

    include_once("../navbar.php");

    ?>

    <div id="fondojuego">
        
        <div id="jugador"></div>
        <div id="paso1" data-izquierda="true"></div>
        <div id="paso2" data-izquierda="false"></div>
        <div id="paso3" data-izquierda="true"></div>
        <div id="paso4" data-izquierda="false"></div>
        <div id="paso5" data-izquierda="true"></div>
        <div id="final"></div>
        <div id="contador" class="border 1px"></div>
        <div id="puntuacio" class="border 1px"></div>
        <button type="button" id="empezar" class="border 1px"><?php echo $content["juego2"]["gamestart"]; ?></button>
        <button type="button" id="siguiente" class="border 1px"></button>
        
        <div id="controles" class="border 3px"><strong><?php echo $content["juego2"]["gamecontrol"]; ?></strong><br><img src="img/controles.png" width="150px" height="100px"></div>
        <div id="nivel" class="border 3px"></div>

    </div>
    
    

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