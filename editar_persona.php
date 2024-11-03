<?php

// Incluye el archivo de conexión a la base de datos
include 'modelo/conexion.php';

// Obtiene el ID de la persona desde la URL
$id = $_GET['id'];

// Realiza una consulta para obtener los datos de la persona con el ID especificado
$sql = $conexion->query("SELECT * FROM persona WHERE id_persona = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar persona</title>

    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary p-3">Modificar personas</h3>

        <!-- Campo oculto para el ID de la persona -->
        <input type="hidden" name="id" value="<?= $_GET['id']?>">

        <?php

        // Incluye el archivo de control para el manejo de la edición
        include 'controlador/editar_control.php';

        // Itera sobre los resultados de la consulta
        while ($datos = $sql->fetch_object()) { ?>
            <!-- Campo para el nombre -->
            <div class="mb-3">
                <label class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>" >
            </div>

            <!-- Campo para el apellido -->
            <div class="mb-3">
                <label class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
            </div>

            <!-- Campo para el DNI -->
            <div class="mb-3">
                <label class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni ?>">
            </div>

            <!-- Campo para la fecha de nacimiento -->
            <div class="mb-3">
                <label class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nac ?>">
            </div>

            <!-- Campo para el correo -->
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>
        <?php } ?>

        <!-- Botón para enviar el formulario -->
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar persona</button>
    </form>

    <!-- Enlace al script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
