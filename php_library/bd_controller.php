<?php
session_start();

require_once("bd.php");


if(isset($_POST['botoncrear'])){

    $usuarios = selectuser();
    $_SESSION['unico'] = false;

    foreach($usuarios as $usuario){
        if($usuario['Email'] == $_POST['correo']){
            
            $_SESSION['unico'] = true;
            header('Location: ../index.php');
            exit();

        }else{
            registrarse($_POST['correo'], $_POST['password']);

            unset($_SESSION['unico']);
            header('Location: ../index.php');
            exit();

        }
    }

    
}


if(isset($_POST['iniciarsess'])){

    $usuarios = selectuser();
    $_SESSION['error'] = false;

    foreach($usuarios as $usuario){

        if($usuario['Email'] == $_POST['correo'] && $usuario['Contrasenya'] == $_POST['password']){
            
            $_SESSION['Id_user'] = $usuario['Id'];
            unset($_SESSION['error']);
            header('Location: ../index.php');
            exit();
        }else{
            $_SESSION['error'] = true;
            header('Location: ../index.php');
            exit();
        }
    }
    
}

if(isset($_SESSION['error']) == true){
    session_destroy();
    
    header('Location: ../index.php');
    exit();

}


if(isset($_POST['cerrarses'])){
    session_destroy();

    header('Location: ../index.php');
    exit();
}



?>