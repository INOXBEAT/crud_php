<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ca768c6dc0.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Hola Mundo</h1>
    <div class="container-fluid row">
        <form class="col-4">
            <h3 class="text-center text-secondary p-3">Registro de personas</h3>
        <div class="mb-3">
                <label 
                for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input 
                type="text" 
                class="form-control" 
                name="nombre">
            </div>
            <div class="mb-3">
                <label 
                for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input 
                type="text" 
                class="form-control" 
                name="apellido">
            </div>
            <div class="mb-3">
                <label 
                for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input 
                type="text" 
                class="form-control" 
                name="dni">
            </div>
            <div class="mb-3">
                <label 
                for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input 
                type="date" 
                class="form-control" 
                name="fecha">
            </div>
            <div class="mb-3">
                <label 
                for="exampleInputEmail1" class="form-label">Correo</label>
                <input 
                type="email" 
                class="form-control" 
                name="correo">
            </div>          
            
            <button 
            type="submit" 
            class="btn btn-primary"
            name="registrar"
            value="ok">Registrar
        </button>
        </form>

        <div class="col-8 p-4">
        <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">OD</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DNI</th>
      <th scope="col">FECHA DE NAC</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>asd</td>
      <td>asd</td>
      <td>asd</td>
      <td>asd</td>
      <td>asd</td>
      <td>asd</td>
      <td>
        <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
</table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>