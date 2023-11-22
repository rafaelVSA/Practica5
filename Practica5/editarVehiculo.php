<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Editar Vehiculo</title>
    <style>
        body{
            background-image: url(assets/img/cliente.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
        #formulario{
            display:table;
            margin:auto;
            margin-top: 5%;
            
        }
        .letras{
            color:black;
            text-align:center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
        h2{
            color:white;
            text-align:center;
            margin-top:3%;
        }
        #textarea{
            resize:none;
        }
        table{
            border: 3px solid #A01515;
            background-color:#CBCBCB !important;

        }
        table tr{
            border: 3px solid #A01515;
        }
        .botones{
            display:table;
            margin:auto;
            margin-top:2%;
        }
        a{
            text-decoration:none;
        }
       
    </style>
</head>
<body>

    <h2>Modificar Vehículo</h2>

    <?php
        $placa=$_GET['placa'];
        $marca=$_GET['marca'];
        $modelo=$_GET['modelo'];
        $tipo=$_GET['tipo'];
        $ano=$_GET['ano'];
        $clasificacion=$_GET['clasificacion'];
        $color=$_GET['color'];
        $transmision=$_GET['transmision'];
        $combustible=$_GET['combustible'];
        $descripcion=$_GET['descripcion'];


    ?>

    <div id="formulario">

        <form action="generarCambiosVehiculo.php" method="post">
            <table>
                <tr>
                    <td><input type="text" name="placa" value="<?=$placa?>"  style="visibility:hidden" id="datosTXT"> DATOS DEL VEHÍCULO</td>
                </tr>
                <tr>
                    <td class="letras">Marca:</td>
                    <td><input type="text" name="marca" value="<?=$marca?>"></td>
                </tr>
                <tr>
                    <td class="letras">Modelo:</td>
                    <td><input type="text" name="modelo" value="<?=$modelo?>"></td>
                </tr>
                <tr>
                    <td class="letras">Tipo:</td>
                    <td><input type="text" name="tipo" value="<?=$tipo?>"></td>
                </tr>
                <tr>
                    <td class="letras">Año:</td>
                    <td><input type="text" name="ano" value="<?=$ano?>"></td>
                </tr>
                <tr>
                    <td class="letras">Clasificación:</td>
                    <td><input type="text" name="clasificacion" value="<?=$clasificacion?>"></td>
                </tr>
                <tr>
                    <td class="letras">Color:</td>
                    <td><input type="text" name="color" value="<?=$color?>"></td>
                </tr>
                <tr>
                    <td class="letras">Transmisión:</td>
                    <td><input type="text" name="transmision" value="<?=$transmision?>"></td>
                </tr>
                <tr>
                    <td class="letras">Cobustible:</td>
                    <td><input type="text" name="combustible" value="<?=$combustible?>"></td>
                </tr>
                <tr>
                    <td class="letras">Descripción:</td>
                    <td><textarea id="textarea" type="text" name="descripcion" rows="4" cols="22"><?=$descripcion?></textarea></td>

                </tr>
            </table>
            <input  type="submit" value="Actualizar" class="btn btn-info botones">
        </form>
        <a  href="listaVehiculo.php"> <button class="btn btn-light botones">Volver</button></a>



    </div> <br><br>

    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

