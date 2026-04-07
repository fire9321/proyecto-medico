<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Médica - Formulario de Ingreso</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        .contenedor { max-width: 600px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px; }
        .campo { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        .botones { margin-top: 20px; display: flex; gap: 10px; }
        button { padding: 10px 15px; cursor: pointer; }
        .buscar-seccion { margin-top: 40px; border-top: 2px solid #eee; padding-top: 20px; }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Nueva Ficha Médica</h2>
    
    <form action="procesar.php" method="POST" id="formularioMedico">
        
        <div class="campo">
            <label>RUT:</label>
            <input type="text" name="rut" placeholder="Ej: 12345678-9" required> </div>

        <div class="campo">
            <label>Nombres:</label>
            <input type="text" name="nombres" required> </div>

        <div class="campo">
            <label>Apellidos:</label>
            <input type="text" name="apellidos" required> </div>

        <div class="campo">
            <label>Dirección:</label>
            <input type="text" name="direccion" required> </div>

        <div class="campo">
            <label>Ciudad:</label>
            <input type="text" name="ciudad" required> </div>

        <div class="campo">
            <label>Teléfono:</label>
            <input type="tel" name="telefono" required> </div>

        <div class="campo">
            <label>Email:</label>
            <input type="email" name="email" required> </div>

        <div class="campo">
            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required> </div>

        <div class="campo">
            <label>Estado Civil:</label>
            <select name="estado_civil" required> <option value="">Seleccione...</option>
                <option value="Soltero/a">Soltero/a</option>
                <option value="Casado/a">Casado/a</option>
                <option value="Viudo/a">Viudo/a</option>
                <option value="Divorciado/a">Divorciado/a</option>
            </select>
        </div>

        <div class="campo">
            <label>Comentarios:</label>
            <textarea name="comentarios" rows="3"></textarea> </div>

        <div class="botones">
            <button type="submit" style="background-color: #d4edda;">Guardar</button>
            <button type="reset" style="background-color: #fff3cd;">Limpiar</button>
            <button type="button" onclick="window.close();" style="background-color: #f8d7da;">Cerrar</button>
        </div>
    </form>

    <div class="buscar-seccion">
        <h3>Buscar Paciente</h3>
        <form action="buscar.php" method="GET">
            <input type="text" name="apellido_buscar" placeholder="Ingrese apellido para buscar..." required>
            <button type="submit" style="margin-top: 10px;">Buscar por Apellido</button>
        </form>
    </div>
</div>

</body>
</html>