<?php 



function abrirBD(){

    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    $conexion = new PDO("mysql:host=$servername;dbname=bd-proyecto", $username, $password);

    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");
    
    return $conexion;


}


function cerrarBD(){

    return null;
    
}

function registrarse($email, $contrasenya){
    $conexion = abrirBD();

    $sentenciaregis = "insert into usuari (Email, Contrasenya, Puntos) values(:email, :contrasenya, 0)";

    $sentencia = $conexion->prepare($sentenciaregis);
    $sentencia-> bindParam(':email', $email);
    $sentencia-> bindParam(':contrasenya', $contrasenya);
    $sentencia->execute();

    $conexion = cerrarBD();
}


function iniciarsess($id){

    $conexion = abrirBD();

     $sentenciainciar = "Select * from usuari where Id = :id";

    $sentencia = $conexion->prepare($sentenciainciar);
    $sentencia->bindParam(':id', $id);
    $sentencia->execute();

    $result = $sentencia->fetchAll();
    
    $conexion =cerrarBD();

    return $result;
}


function selectuser(){

    $conexion = abrirBD();

    $sentenciaselect = "Select * from usuari";

    $sentencia = $conexion->prepare($sentenciaselect);
    $sentencia->execute();

    $result = $sentencia->fetchAll();

    $conexion = cerrarBD();

    return $result;

}



?>

