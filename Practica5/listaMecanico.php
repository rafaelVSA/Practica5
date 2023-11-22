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
    <title>Lista de Mecanicos</title>
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
    <a href="mecanico.php"><button class="btn btn-light">Volver</button></a>
        <br><br>
        <table border="1" class="table table-dark table-striped">
            <tr>
                <th scope="col">CÉDULA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">TELÉFONO</th>
                <th scope="col">SEXO</th>
                <th scope="col">CORREO</th>
                <th scope="col">DIRECCIÓN</th>
                <td scope="col">OPCIÓN</th>
            </tr>
            <?php
            $clientes= "SELECT * FROM mecanico";
            $resultado = mysqli_query($connect, $clientes); 
            
            while($row=mysqli_fetch_assoc($resultado))  { ?>
            <tr>
                <td><?php echo $row['cedula'] ?></td>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['apellido'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['sexo'] ?></td>
                <td><?php echo $row['correo'] ?></td>
                <td><?php echo $row['direccion'] ?></td>
                <td> 
                    <button class="btn btn-secondary">
                    <a  href="editarMecanico.php?
                        cedula=<?php echo $row['cedula']?> &
                        nombre=<?php echo $row['nombre']?> &
                        apellido=<?php echo $row['apellido']?> &
                        telefono=<?php echo $row['telefono']?> &
                        sexo=<?php echo $row['sexo']?> &
                        correo=<?php echo $row['correo']?> &
                        direccion=<?php echo $row['direccion']?> 
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