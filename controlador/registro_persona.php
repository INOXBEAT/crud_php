<?php

// Verifica si el botón de registrar ha sido presionado
if (!empty($_POST['btnregistrar'])) {

    // Verifica que todos los campos requeridos estén llenos
    if (
        !empty($_POST['nombre']) and
        !empty($_POST['apellido']) and
        !empty($_POST['dni']) and
        !empty($_POST['fecha']) and
        !empty($_POST['correo'])
    ) {

        // Asigna los valores de los campos a variables
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        // Realiza la inserción en la base de datos
        $sql = $conexion->query("INSERT INTO persona(
            nombre,
            apellido,
            dni,
            fecha_nac,
            correo)

            values (
            '$nombre',
            '$apellido',
            '$dni',
            '$fecha',
            '$correo')");

        // Verifica si la inserción fue exitosa
        if ($sql == 1) {
            // Mensaje de éxito
            echo '<div class="alert alert-success">
            Persona Registrada correctamente</div>';
        } else {
            // Mensaje de error en la inserción
            echo '<div class="alert alert-danger">
            Error al registrar persona</div>';
        }
    } else {
        // Mensaje de advertencia si hay campos incompletos
        echo '<div class="alert alert-warning">
        Campos incompletos</div>'; 
    }
}
?>
