<?php
    include_once('assets/conexion.php');

    $fecha= $_POST['fecha'];
    $placa= $_POST['placa'];


    $query=  "INSERT INTO reparacion(fecha,vehiculo_placa) VALUES ('$fecha','$placa')";

    $rs=mysqli_query($connect,$query) or die(mysqli_error($connect)); //recordset

    header('location:registroReparacion.php');


?>