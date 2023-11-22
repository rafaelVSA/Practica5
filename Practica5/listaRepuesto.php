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
    <title>Lista de Repuestos</title>
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
        .imgRepuestos img{
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
    <a href="repuesto.php"><button class="btn btn-light">Volver</button></a>
        <br><br>
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th scope="col">SERIAL</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">MARCA</th>
                <th scope="col">MODELO</th>
                <th scope="col">CANTIDAD</th>
                <td scope="col">IMÁGEN</th>
                <td scope="col">DESCRIPCIÓN</th>
                <td scope="col">OPCIÓN</th>
            </tr>
            <?php
            $repuestos= "SELECT * FROM repuesto";
            $resultado = mysqli_query($connect, $repuestos); 
            
            while($row=mysqli_fetch_assoc($resultado))  { ?>
            <tr>
                <td><?php echo $row['seriall'] ?></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['marca'] ?></td>
                <td><?php echo $row['modelo'] ?></td>
                <td><?php echo $row['cantidad'] ?></td>
                <td class="imgRepuestos"><img src=" <?php echo $row['imagen']  ?> " alt="ERROR..."> </td>
                <td><?php echo $row['descripcion'] ?></td>

                <td> 
                    <button class="btn btn-secondary">
                        <a href="editarRepuesto.php?
                        seriall=<?php echo $row['seriall']?> &
                        nombre=<?php echo $row['nombre']?> &
                        marca=<?php echo $row['marca']?> &
                        modelo=<?php echo $row['modelo']?> &
                        cantidad=<?php echo $row['cantidad']?> &
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