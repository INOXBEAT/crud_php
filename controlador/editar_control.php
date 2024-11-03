<?php 

// Verifica si se ha enviado el formulario de registro
if (!empty($_POST['btnregistrar'])) {
    
    // Comprueba que todos los campos obligatorios estén llenos
    if (!empty($_POST['nombre']) &&
        !empty($_POST['apellido']) &&
        !empty($_POST['dni']) &&
        !empty($_POST['fecha']) &&
        !empty($_POST['correo'])) {
        
        // Asigna los valores del formulario a variables
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $fecha = $_POST['fecha'];
        $correo = $_POST['correo'];

        // Realiza la consulta SQL para actualizar la información de la persona
        $sql = $conexion->query("UPDATE persona SET
            nombre = '$nombre',
            apellido = '$apellido',
            dni = '$dni',
            fecha_nac = '$fecha',
            correo = '$correo'
            WHERE id_persona = $id;");

        // Verifica si la consulta se ejecutó correctamente
        if ($sql == 1) {
            // Redirige a index.php si la actualización fue exitosa
            header("location:index.php");
        } else {
            // Muestra un mensaje de error si la consulta falló
            echo '<div class="alert alert-danger">Error al modificar persona</div>';
        } 
        
    } else {
        // Muestra un mensaje de advertencia si hay campos vacíos
        echo '<div class="alert alert-warning">Campos vacíos</div>';
    }
}
