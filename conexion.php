<?php
$host = "localhost";
$user = "root"; // Usuario por defecto
$pass = "";     // Deja vacío si es XAMPP, o pon tu clave de Workbench
$db   = "fichas"; // Nombre que pusiste en el Paso 1

$con = mysqli_connect($host, $user, $pass, $db);

// Verificación para tu informe de V&V
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>