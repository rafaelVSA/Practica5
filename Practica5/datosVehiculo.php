<?php
    include_once('assets/conexion.php');

    $cliente= $_POST['cliente'];
    $placa= $_POST['placa'];
    $marca= $_POST['marca'];
    $modelo= $_POST['modelo'];
    $ano= $_POST['ano'];
    $color= $_POST['color'];
    $tipo2= $_POST['tipo'];
    $clasificacion= $_POST['clasificacion'];
    $transmision= $_POST['transmision'];
    $combustible= $_POST['combustible'];
    $descripcion= $_POST['descripcion'];
    $foto= '';
    if(isset($_FILES["imagen"])){
        $file=$_FILES["imagen"];
        $nombre=$file["name"];
        $tipo=$file["type"];
        $ruta_provisional= $file["tmp_name"];
        $size=$file["size"];
        $dimensiones= getimagesize($ruta_provisional);
        $width= $dimensiones[0];
        $height= $dimensiones[1];
        $carpeta = "imgVehiculos/";
        if($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
            echo "Error, el archivo no es una imagen";
        }else if($size > 3*1024*1024){
            echo "Error, el tamaño máximo permitido es 3MB";
        }else{
            $src=$carpeta.$nombre;
            move_uploaded_file($ruta_provisional, $src);
            $foto="imgVehiculos/".$nombre;
        }

    }


    $query=  "INSERT INTO vehiculo(placa,marca,modelo,cliente_cedula,tipo,clasificacion,ano,color,transmision,combustible,descripcion,imagen) VALUES ('$placa','$marca','$modelo','$cliente','$tipo2','$clasificacion','$ano','$color', '$transmision','$combustible', '$descripcion','$foto')";

    $rs=mysqli_query($connect,$query) or die(mysqli_error($connect)); //recordset

    header('location:registroVehiculo.php');


?>