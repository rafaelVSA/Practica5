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
    <title>Editar Repuesto</title>
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

    <h2>Modificar Repuesto</h2>

    <?php
        $serial=$_GET['seriall'];
        $nombre=$_GET['nombre'];
        $marca=$_GET['marca'];
        $modelo=$_GET['modelo'];
        $cantidad=$_GET['cantidad'];
        $descripcion=$_GET['descripcion'];
    ?>

    <div id="formulario">

        <form action="generarCambiosRepuesto.php" method="post">
            <table>
                <tr>
                    <td><input type="text" name="seriall" value="<?=$serial?>"  style="visibility:hidden" id="datosTXT"> DATOS DEL REPUESTO</td>
                </tr>
                <tr>
                    <td class="letras">Nombre:</td>
                    <td><input type="text" name="nombre" value="<?=$nombre?>"></td>
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
                    <td class="letras">Cantidad:</td>
                    <td><input type="text" name="cantidad" onkeypress="return soloNumeros(event)" value="<?=$cantidad?>"></td>
                    <script>
                        function soloNumeros(e){
                            key = e.keyCode || e.which
                            tecla = String.fromCharCode(key).toString()
                            letras = "1234567890"
                            especiales = [8,13]
                            tecla_especial=false
                            for(var i in especiales){
                                if(key == especiales[i]){
                                    tecla_especial=true
                                    break
                                }
                            }

                            if(letras.indexOf(tecla) == -1 && !tecla_especial){
                                return false
                            }
                        }
                    </script>
                </tr>
                <tr>
                    <td class="letras">Descripción:</td>
                    <td><textarea id="textarea" type="text" name="descripcion" rows="4" cols="22"><?=$descripcion?></textarea></td>

                </tr>
            </table>
            <input  type="submit" value="Actualizar" class="btn btn-info botones">
        </form>
        <a  href="listaRepuesto.php"> <button class="btn btn-light botones">Volver</button></a>



    </div> <br><br>

    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

