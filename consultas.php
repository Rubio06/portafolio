<?php 
    include("conexion/conexion.php");
    $cn = Conectarse();

    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $tema = $_POST["tema"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO `formulario`(`nombre`, `direccion`, `tema`, `mensaje`) VALUES ('$nombre','$direccion','$tema','$mensaje')";
    $query = mysqli_query($cn, $sql);

?>