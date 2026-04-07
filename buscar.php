<?php
include("conexion.php");

$apellido = $_GET['apellido_buscar'];

// Validación: que el campo no esté vacío
if (empty($apellido)) {
    echo "<script>alert('Por favor ingrese un apellido'); window.location.href='index.php';</script>";
    exit();
}

$sql = "SELECT * FROM pacientes WHERE apellidos LIKE '%$apellido%'";
$resultado = mysqli_query($con, $sql);

echo "<h2>Resultados de búsqueda para: $apellido</h2>";

if (mysqli_num_rows($resultado) > 0) {
    echo "<table border='1'>
            <tr>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
            </tr>";
    while ($row = mysqli_fetch_array($resultado)) {
        echo "<tr>
                <td>".$row['rut']."</td>
                <td>".$row['nombres']."</td>
                <td>".$row['apellidos']."</td>
                <td>".$row['email']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron pacientes con ese apellido.";
}

echo "<br><a href='index.php'>Volver al formulario</a>";
?>
