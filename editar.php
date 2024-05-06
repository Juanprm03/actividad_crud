<?php 
include "models/conexion.php";

$id=$_GET["id"];

$sql=$conexion->query("select * from tblpersona where id_persona = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/00e82ec375.js" crossorigin="anonymous"></script>

</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">  
        <h2 class="text-center text-secondary">editar Productos</h2>
        <input type="hidden"name= "id" value="<?=$_GET["id"]?>">
        <?php 
        include "controllers/editar_persona.php";

        while($datos=$sql->fetch_object()){ ?>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido"  value="<?= $datos->apellido?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">dni</label>
            <input type="text" class="form-control" name="dni" value="<?= $datos->dni?>" >
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" value="<?= $datos->edad?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $datos->email?>">
          </div>
          
         
          <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Editar</button>
        </form>
       <?php }
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
</body>
</html>