<?php
    include_once('assets/conexion.php');
    
    $cedula= $_POST['cedula'];
    $nombre= $_POST['nombre']; 
    $apellido= $_POST['apellido'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $sexo= $_POST['sexo'];
    $direccion= $_POST['direccion'];

    $editar= "UPDATE mecanico SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', sexo='$sexo', direccion='$direccion' WHERE cedula='$cedula'";

    $resultado=mysqli_query($connect, $editar);

    if(!$resultado){
        echo '<script language="javascript">alert("No se actualizó");</script>';
    }else{
        header("Location: listaMecanico.php");
    }

?>