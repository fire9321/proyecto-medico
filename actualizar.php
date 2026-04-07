<?php
include("conexion.php");

$rut = $_GET['rut'];
$nombres = $_GET['nombres'];
// ... captura los demás campos con $_GET ...

$sql_update = "UPDATE fichas SET nombres='$nombres', apellidos='$apellidos', ... WHERE rut='$rut'";

if(mysqli_query($con, $sql_update)) {
    echo "<script>alert('Datos actualizados'); window.location.href='index.php';</script>";
}
?>