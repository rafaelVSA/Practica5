<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php
    include_once('assets/conexion.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehiculos</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <style>
        body{
            background-image: url(assets/img/cliente.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
        table{
            
            width: 80% !important;
            display:table;
            margin:auto;
        }
        .btn-light{
            margin-left:4%;
        }
        .imgVehiculos img{
            width:55px;
            height:55px;
            margin: auto;
        }
        button a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<div><br><br>
    <a href="vehiculo.php"><button class="btn btn-light">Volver</button></a>
        <br><br>
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th scope="col">PLACA</th>
                <th scope="col">MARCA</th>
                <th scope="col">MODELO</th>
                <th scope="col">C.I/CLIENTE</th>
                <th scope="col">TIPO</th>
                <th scope="col">AÑO</th>
                <th scope="col">CLASIFICACIÓN</th>
                <td scope="col">COLOR</th>
                <td scope="col">TRANSMISIÓN</th>
                <td scope="col">COMBUSTIBLE</th>
                <td scope="col">DESCRIPCIÓN</th>
                <td scope="col">IMÁGEN</th>
                <td scope="col">OPCIÓN</th>
            </tr>
            <?php
            $vehiculos= "SELECT * FROM vehiculo";
            $resultado = mysqli_query($connect, $vehiculos); 
            
            while($row=mysqli_fetch_assoc($resultado))  { ?>
            <tr>
                <td><?php echo $row['placa'] ?></td>
                <td><?php echo $row['marca'] ?></td>
                <td><?php echo $row['modelo'] ?></td>
                <td><?php echo $row['cliente_cedula'] ?></td>
                <td><?php echo $row['tipo'] ?></td>
                <td><?php echo $row['ano'] ?></td>
                <td><?php echo $row['clasificacion'] ?></td>
                <td><?php echo $row['color'] ?></td>
                <td><?php echo $row['transmision'] ?></td>
                <td><?php echo $row['combustible'] ?></td>
                <td><?php echo $row['descripcion'] ?></td>
                <td class="imgVehiculos"><img src=" <?php echo $row['imagen']  ?> " alt="ERROR..."> </td>

                <td> 
                    <button class="btn btn-secondary">
                        <a href="editarVehiculo.php?
                        placa=<?php echo $row['placa']?> &
                        marca=<?php echo $row['marca']?> &
                        modelo=<?php echo $row['modelo']?> &
                        tipo=<?php echo $row['tipo']?> &
                        ano=<?php echo $row['ano']?> &
                        clasificacion=<?php echo $row['clasificacion']?> &
                        color=<?php echo $row['color']?> &
                        transmision=<?php echo $row['transmision']?> &
                        combustible=<?php echo $row['combustible']?> &
                        descripcion=<?php echo $row['descripcion']?> 
                        ">Editar</a>
                    </button>
                </td>
            </tr>
            <?php
            }  ?>

        </table>
    </div><br><br><br>
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>