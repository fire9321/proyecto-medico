<?php
$host = "localhost";
$user = "root"; // Usuario por defecto
$pass = "";     // Deja vacío si es XAMPP
$db   = "fichas"; 

$con = mysqli_connect($host, $user, $pass, $db);


if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
