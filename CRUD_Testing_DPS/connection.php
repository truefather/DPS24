<?php

function conectarBaseDatos(){
    $servidor = "SERVIDOR PRINCIPAL";
    $usuario = "admin";
    $contrasena = "";

    $baseDatos = "clientes";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena);

    mysqli_select_db($conexion, $baseDatos);

    return $conexion;

}

?>

