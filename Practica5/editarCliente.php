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
    <title>Editar Cliente</title>
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

    <h2>Modificar Cliente</h2>

    <?php
        $cedula=$_GET['cedula'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $telefono=$_GET['telefono'];
        $correo=$_GET['correo'];
        $sexo=$_GET['sexo'];
        $direccion=$_GET['direccion'];

    ?>

    <div id="formulario">

        <form action="generarCambiosCliente.php" method="post">
            <table>
                <tr>
                    <td><input type="text" name="cedula" value="<?=$cedula?>"  style="visibility:hidden" id="datosTXT"> DATOS DEL CLIENTE/A</td>

                </tr>
                <tr>
                    <td class="letras">Nombre:</td>
                    <td><input type="text" name="nombre" value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td class="letras">Apellido:</td>
                    <td><input type="text" name="apellido" value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td class="letras">Teléfono:</td>
                    <td><input type="text" name="telefono" value="<?=$telefono?>"></td>
                </tr>
                <tr>
                    <td class="letras">Correo:</td>
                    <td><input type="text" name="correo" value="<?=$correo?>"></td>
                </tr>
                <tr>
                    <td class="letras">Sexo:</td>
                    <td><input type="text" name="sexo" value="<?=$sexo?>"></td>
                </tr>
                <tr>
                    <td class="letras">Dirección:</td>
                    <td><textarea id="textarea" type="text" name="direccion" rows="4" cols="22"><?=$direccion?></textarea></td>

                </tr>
            </table>
            <input  type="submit" value="Actualizar" class="btn btn-info botones">
        </form>
        <a  href="listaCliente.php"> <button class="btn btn-light botones">Volver</button></a>



    </div> <br><br>

    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

