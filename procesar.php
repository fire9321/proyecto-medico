<?php
include("conexion.php");

// 1. Captura de datos
$rut = $_POST['rut'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$estado_civil = $_POST['estado_civil'];
$comentarios = $_POST['comentarios'];


$consulta_existe = "SELECT * FROM pacientes WHERE rut = '$rut'";
$resultado_existe = mysqli_query($con, $consulta_existe);

if (mysqli_num_rows($resultado_existe) > 0) {
    // Si existe, pregunta si desea sobrescribir
    echo "<script>
        if(confirm('El RUT $rut ya existe. ¿Desea sobrescribir los datos?')){
            window.location.href = 'actualizar.php?rut=$rut&nombres=$nombres&apellidos=$apellidos&direccion=$direccion&ciudad=$ciudad&telefono=$telefono&email=$email&fecha_nacimiento=$fecha_nacimiento&estado_civil=$estado_civil&comentarios=$comentarios';
        } else {
            window.location.href = 'index.php';
        }
    </script>";
} else {
    // 3. Inserción (Línea 35 corregida)
    $sql_insertar = "INSERT INTO pacientes (rut, nombres, apellidos, direccion, ciudad, telefono, email, fecha_nacimiento, estado_civil, comentarios) 
                     VALUES ('$rut', '$nombres', '$apellidos', '$direccion', '$ciudad', '$telefono', '$email', '$fecha_nacimiento', '$estado_civil', '$comentarios')";
    
    if (mysqli_query($con, $sql_insertar)) {
        echo "<script>alert('Registro guardado con éxito'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
