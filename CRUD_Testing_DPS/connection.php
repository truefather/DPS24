function connection() {
    $host = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $bd = "usuaries"; 

    
    $connect = mysqli_connect($host, $user, $pass, $bd);

    
    if (!$connect) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    return $connect;
}


$conexion = connection();

mysqli_close($conexion);
?>

