<?php

if(!empty ($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["edad"]) && !empty($_POST["email"])){
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $edad = $_POST["edad"];
        $email = $_POST["email"];

        $sql= $conexion->query("update tblpersona set nombre='$nombre',apellido='$apellido',dni='$dni',edad=$edad,email='$email'");
    }
}else{
    echo '<div class="alert alert-warning">Alguno de los campos esta vacio </div> ';
}
?>