<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "iniciosesion";

$conexion = mysqli_connect($server, $user, $pass, $database);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}


?>
