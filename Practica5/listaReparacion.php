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
    <title>Lista de Reparaciones</title>
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
        button a{
            text-decoration: none;
            color: white;
        }

       
    </style>
</head>
<body>

<div><br><br><br>
    <a href="reparacion.php"><button class="btn btn-light">Volver</button></a>
        <br><br>
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th scope="col">PLACA DEL VEHÍCULO</th>
                <th scope="col">FECHA DE REPARACIÓN</th>
            </tr>
            <?php
            $reparaciones= "SELECT * FROM reparacion";
            $resultado = mysqli_query($connect, $reparaciones); 
            
            while($row=mysqli_fetch_assoc($resultado))  { ?>
            <tr>
                <td><?php echo $row['vehiculo_placa'] ?></td>
                <td><?php echo $row['fecha'] ?></td>
            </tr>
            <?php
            }  ?>

        </table>
    </div><br><br><br>
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>