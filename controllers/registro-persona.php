<?php 


if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["edad"]) && !empty($_POST["email"])){
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $edad = $_POST["edad"];
        $email = $_POST["email"];

        $sql=$conexion->query("insert into tblpersona(nombre,apellido,dni,edad,email)values('$nombre','$apellido','$dni',$edad,'$email')");
        if($sql == 1){
            echo '<div class="alert alert-success">Persona Registrada correctamente </div> ';
        }else{
            echo '<div class="alert alert-danger">Error al registrarse </div> ';
        }
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio </div> ';
    }

}
?>