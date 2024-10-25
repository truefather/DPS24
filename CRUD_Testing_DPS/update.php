<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM testers WHERE id_tester='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar productos</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="idtester" value="<?= $row['id_tester']?>">
                <input type="text" name="apellido" placeholder="apellido" value="<?= $row['apellido']?>">
                <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre']?>">
                <input type="text" name="edad" placeholder="edad" value="<?= $row['edad']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
