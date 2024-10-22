<?php

include("conectarBaseDatos.php");
$conexion = conectarBaseDatos();

$clienteId = $_GET["clienteId"];

$consulta = "DELETE FROM clientes WHERE cliente_id='$clienteId'";
$resultado = mysqli_query($conexion, $consulta);

if($resultado){
    Header("Location: inicio.php");
}else{

}

// ESTOS SON MIS CAMBIOS FLORENCSIO 

?>
