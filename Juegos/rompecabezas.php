<?php
    $DEFAULT_LANG = "es";
    $currentPage = "rompecabezas.php";

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
    <title><?php echo $content["juego4"]["gametitle"]; ?></title>
    <link rel="icon" type="image/png" href="imagenes_puzzle/puzzle.png"/>

</head>
<body>

      <?php

        include_once("../navbar.php");

      ?>


    
          <div class="sidenav">
            <br><br>
            
            
             
            <div class="parrafo">
              <p><?php echo $content["juego4"]["gamep"]; ?></p>
            </div>
            
         

           

            <p id="demo" style="color: white;"></p>

          </div>
        <br><br><br><br>
          <center>
            <h3><?php echo $content["juego4"]["gameh3"]; ?></h3>

        <div id="puzzle">
            <table>
            <tr>
              <td>
              <div id="contador" class="border 1px" style="background: gold; left: 907px; top:142px; position:absolute; width: 60px; height:50px;  text-align: center; border-color: goldenrod !important;"></div>
              </td>
			        <tr>
				        <td><img id="img_0" src="Imagenes_puzzle/img_0.png" onclick="seleccionar(0)" /></td>
				        <td><img id="img_1" src="Imagenes_puzzle/img_1.png" onclick="seleccionar(1)" /></td>
				        <td><img id="img_2" src="Imagenes_puzzle/img_2.png" onclick="seleccionar(2)" /></td>
			        </tr>
			        <tr>
				        <td><img id="img_3" src="Imagenes_puzzle/img_3.png" onclick="seleccionar(3)" /></td>
				        <td><img id="img_4" src="Imagenes_puzzle/img_4.png" onclick="seleccionar(4)" /></td>
				        <td><img id="img_5" src="Imagenes_puzzle/img_5.png" onclick="seleccionar(5)" /></td>
			        </tr>
		      	  <tr>
				        <td><img id="img_6" src="Imagenes_puzzle/img_6.png" onclick="seleccionar(6)" /></td>
				        <td><img id="img_7" src="Imagenes_puzzle/img_7.png" onclick="seleccionar(7)" /></td>
				        <td><img id="img_8" src="Imagenes_puzzle/img_8.png" onclick="seleccionar(8)" /></td>
			        </tr>
            </table>
        </div>
        </center>

      
          

        
          
        </div>

        <br>
        
        <button type="button" id="siguiente" class="border 2px" style="position: absolute;"> <a href="../juegos.php"  style="text-decoration:none"><?php echo $content["juego4"]["gamemenu"]; ?></a></button>
        
       

      
          
        <script type="text/javascript" src="script_rompecabezas.js"></script>



</body>
<script type="text/javascript">

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>