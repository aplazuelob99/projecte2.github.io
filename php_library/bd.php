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







?>

