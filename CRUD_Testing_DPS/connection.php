<?php

function connection(){
    $host = "USUARIO FINAL";
    $user = "root";
    $pass = "";

    $bd = "usuaries";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
