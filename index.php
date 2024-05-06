<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <script src="https://kit.fontawesome.com/00e82ec375.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Hola Mundo</h1>
    
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">  
        <h2 class="text-center text-secondary">Registro</h2>

        <?php 
        include "models/conexion.php";
        include "controllers/registro-persona.php";
        ?>
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">dni</label>
    <input type="text" class="form-control" name="dni" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Edad</label>
    <input type="number" class="form-control" name="edad" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  
 
  <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Registrar</button>
</form>

    <div class="col-8 p-4">
    <table class="table table-dark table-striped">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Dni</th>
      <th scope="col">Edad</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
     <?php
     include "models/conexion.php";
     $sql = $conexion->query("select * from tblpersona");
     while($datos=$sql->fetch_object()){ ?>
        <tr>
            <td><?= $datos->id_persona ?></td>
            <td><?= $datos->nombre ?></td>
            <td><?= $datos->apellido ?></td>
            <td><?= $datos->dni ?></td>
            <td><?= $datos->edad ?></td>
            <td><?= $datos->email ?></td>
            <td>
                <a href="editar.php?id=<?php $datos->id_persona ?>" class="btn btn-small btn-primary"><i class="fa-solid fa-user-pen"></i></a>
                <a href="" class="btn btn-small btn-light"><i class="fa-solid fa-trash"></i></a>
        </td>
        </tr>
    <?php }
     ?>
    
   
  </tbody>
</table>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>
</html>