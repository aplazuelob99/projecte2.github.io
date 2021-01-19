<?php
session_start();

require_once("bd.php");


if(isset($_POST['botoncrear'])){

    registrarse($_POST['correo'], $_POST['password']);

    header('Location: ../index.php');
    exit();
}


if(isset($_POST['iniciarsess'])){

    $usuarios = selectuser();
    $_SESSION['error'] = false;

    foreach($usuarios as $usuario){

        if($usuario['Email'] == $_POST['correo'] && $usuario['Contrasenya'] == $_POST['password']){
            
            $_SESSION['Id_user'] = $usuario['Id'];
            // $id = $_SESSION['Id_user'];
            // iniciarsess($id);

            header('Location: ../index.php');
            exit();
        }else{
            $_SESSION['error'] = true;
        }
    }
    
}


if(isset($_POST['cerrarses'])){
    session_destroy();

    header('Location: ../index.php');
    exit();
}



?>