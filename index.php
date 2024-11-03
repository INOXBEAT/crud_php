<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8"> <!-- Establece la codificación de caracteres -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Para el diseño responsivo -->
  <title>Crud en php y mysql</title> <!-- Título de la página -->
  
  <!-- Enlace a la hoja de estilos de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Enlace al kit de Font Awesome para iconos -->
  <script src="https://kit.fontawesome.com/ca768c6dc0.js" crossorigin="anonymous"></script>
</head>

<body>
  <h1 class="text-center p-3">CRUD con PHP, MySQL y Bootstrap</h1>

  <!-- INCLUYE EL MODELO Y CONTROLADORES -->
  <?php
    include 'modelo/conexion.php'; // Conexión a la base de datos
    include 'controlador/registro_persona.php'; // Controlador para el registro de personas
  ?>

  <div class="container-fluid row">

    <!-- FORMULARIO DE REGISTRO -->
    <form class="col-4 p-3" method="POST">
      <h3 class="text-center alert alert-secondary p-3">Registro de personas</h3>
      
      <!-- Campo para el nombre -->
      <div class="mb-3">
        <label class="form-label">Nombre de la persona</label>
        <input type="text" class="form-control" name="nombre">
      </div>
      
      <!-- Campo para el apellido -->
      <div class="mb-3">
        <label class="form-label">Apellido de la persona</label>
        <input type="text" class="form-control" name="apellido">
      </div>
      
      <!-- Campo para el DNI -->
      <div class="mb-3">
        <label class="form-label">DNI de la persona</label>
        <input type="text" class="form-control" name="dni">
      </div>
      
      <!-- Campo para la fecha de nacimiento -->
      <div class="mb-3">
        <label class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha">
      </div>
      
      <!-- Campo para el correo -->
      <div class="mb-3">
        <label class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo">
      </div>

      <!-- Botón para enviar el formulario -->
      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>

    <!-- TABLA PARA LISTAR PERSONAS -->
    <div class="col-8 p-4">
      <table class="table">
        <thead class="table-primary">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRES</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">DNI</th>
            <th scope="col">FECHA DE NAC</th>
            <th scope="col">CORREO</th>
            <th scope="col"></th> <!-- Columna para acciones -->
          </tr>
        </thead>
        <tbody>

        <!-- QUERY PARA LISTAR PERSONAS -->
          <?php
          include 'modelo/conexion.php'; // Repetida conexión a la base de datos

          // Consulta para obtener todas las personas
          $sql = $conexion->query('SELECT * FROM persona');

          // Itera sobre los resultados y genera filas de la tabla
          while ($datos = $sql->fetch_object()) { ?>
            <tr>
              <td><?= $datos->id_persona ?></td>
              <td><?= $datos->nombre ?></td>
              <td><?= $datos->apellido ?></td>
              <td><?= $datos->dni ?></td>
              <td><?= $datos->fecha_nac ?></td>
              <td><?= $datos->correo ?></td>

              <td>
                <!-- Botones para editar y eliminar -->
                <a href="editar_persona.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>

  <!-- Enlace al script de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
