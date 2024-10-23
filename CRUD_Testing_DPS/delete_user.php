<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM usuarios WHERE id_usuario='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: indexo.php");
}else{

}//ESTOS SON MIS CAMBIOS

echo "Error: Could not delete the user.";
    }

    $stmt->close();
} else {
    // Handle SQL preparation errors
    echo "Error: Failed to prepare the SQL statement.";
}

$con->close();
?>
