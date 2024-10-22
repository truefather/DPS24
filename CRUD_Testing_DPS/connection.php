<?php

function connection(){
    $host = "Localhost";
    $user = "root";
    $pass = "";

    $bd = "usuarios";

    $connect=mysqli_connect($host, $user, $pass);
    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    mysqli_select_db($connect, $bd);
if (!mysqli_select_db($connect, $bd)) {
        die("Error al seleccionar la base de datos: " . mysqli_error($connect));
    }
    return $connect;

}

?>

