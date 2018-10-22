<?php
include('con.php');

if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO registros (nombre, apellido, correo, telefono, curso)VALUES ('" .$_POST['nombre']. "','".$_POST['apellido']."','".$_POST['correo']."','".$_POST['telefono']."','".$_POST['curso']."' )";

    $result = mysqli_query($conn,$sql);
    echo $sql;
}

header("Location: ../index.html");
die();

?>