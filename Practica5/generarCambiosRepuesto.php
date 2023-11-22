<?php
    include_once('assets/conexion.php');

    $serial=$_POST['seriall'];
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $cantidad=$_POST['cantidad'];    
    $descripcion=$_POST['descripcion'];

    $editar= "UPDATE repuesto SET nombre='$nombre', marca='$marca', modelo='$modelo', cantidad='$cantidad',descripcion='$descripcion' WHERE seriall='$serial'";

    $resultado=mysqli_query($connect, $editar);

    if(!$resultado){
        echo '<script language="javascript">alert("No se actualizó");</script>';
    }else{
        header("Location: listaRepuesto.php");
    }

?>