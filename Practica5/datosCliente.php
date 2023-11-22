<?php
    include_once('assets/conexion.php');

    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $cedula= $_POST['cedula'];
    $telefono= $_POST['telefono'];
    $sexo= $_POST['sexo'];
    $correo= $_POST['correo'];
    $direccion= $_POST['direccion'];

    $query=  "INSERT INTO cliente(cedula,nombre,apellido,telefono,sexo,correo, direccion) VALUES ('$cedula','$nombre','$apellido','$telefono','$sexo','$correo','$direccion')";

    $rs=mysqli_query($connect,$query) or die(mysqli_error($connect)); //recordset


?>