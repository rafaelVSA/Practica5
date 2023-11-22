<?php
    include_once('assets/conexion.php');

    $serial= $_POST['serial'];
    $nombreR= $_POST['nombre'];
    $marca= $_POST['marca'];
    $modelo= $_POST['modelo'];
    $cantidad= $_POST['cantidad'];
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
        $carpeta = "imgRepuestos/";
        if($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
            echo "Error, el archivo no es una imagen";
        }else if($size > 3*1024*1024){
            echo "Error, el tamaño máximo permitido es 3MB";
        }else{
            $src=$carpeta.$nombre;
            move_uploaded_file($ruta_provisional, $src);
            $foto="imgRepuestos/".$nombre;
        }

    }


    $query=  "INSERT INTO repuesto(seriall,nombre,marca,modelo,cantidad,descripcion,imagen) VALUES ('$serial','$nombreR','$marca','$modelo','$cantidad','$descripcion','$foto')";

    $rs=mysqli_query($connect,$query) or die(mysqli_error($connect)); //recordset

    header('location:registroRepuesto.php');


?>