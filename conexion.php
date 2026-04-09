<?php
// Datos de conexión para el servidor de GoogieHost
$host = "localhost";
$db   = "wmgevico_medico";
$user = "wmgevico__UWsffclAEryG2JQ_22g1Tdt3ppDDfXyy"; 
$pass = "Kalipa93*"; 

// Intentar conectar con la base de datos
$conexion = mysqli_connect($host, $user, $pass, $db);

// Si algo sale mal, mostrar el error
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
