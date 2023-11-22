<?php
    include_once('assets/conexion.php');

    $placa=$_POST['placa'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $tipo=$_POST['tipo'];
    $ano=$_POST['ano'];
    $clasificacion=$_POST['clasificacion'];
    $color=$_POST['color'];
    $transmision=$_POST['transmision'];
    $combustible=$_POST['combustible'];
    $descripcion=$_POST['descripcion'];

    $editar= "UPDATE vehiculo SET marca='$marca', modelo='$modelo', tipo='$tipo', ano='$ano', clasificacion='$clasificacion', color='$color',transmision='$transmision',combustible='$combustible',descripcion='$descripcion' WHERE placa='$placa'";

    $resultado=mysqli_query($connect, $editar);

    if(!$resultado){
        echo '<script language="javascript">alert("No se actualizó");</script>';
    }else{
        header("Location: listaVehiculo.php");
    }

?>