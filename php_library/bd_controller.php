<?php

require_once("bd.php");


if(isset($_POST['botoncrear'])){

    registrarse($_POST['correo'], $_POST['password']);

    header('Location: ../index.php');
    exit();
}


if(isset($_POST['iniciarsess'])){

    $usuarios = selectuser();

    foreach($usuarios as $usuario){

        if($usuario['Email'] == $_POST['correo'] && $usuario['Contrasenya'] == $_POST['password']){
            $_SESSION['Id_user'] = $usuario['Id'];

            header('Location: ../index.php');
            exit();
        }
    }
}



?>