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
    <title>Menu</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">

    <style>
        body{
            background-image: url(assets/img/cliente.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
    </style>

</head>
<body>



    <div id="contenedor">
        <br><br>
        <ul>  
            <li style="--i:6;"  data-icon="&#xf21d">    
                <a href="cliente.php">Clientes</a>
            </li> 
            <li style="--i:5;" data-icon="&#xf2bc">
                <a href="mecanico.php">Mecánicos</a>
            </li>
            <li style="--i:4;" data-icon="&#xf1b9">
                <a href="vehiculo.php">vehículos</a>
            </li>   
            <li style="--i:3;" data-icon="&#xf0ad">
                <a href="repuesto.php">repuestos</a>
            </li>
            <li style="--i:2;" data-icon="&#xf085">
                <a href="reparacion.php">reparación</a>
            </li>
            <li style="--i:1;" data-icon="&#xf08b">
                <a href="index.php">Salir</a>
            </li>
        </ul>
    </div>
        
    <br><br><br><br>
    <br><br><br><br>
    
    <footer class="bg-dark text-center text-white ">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button"
            ><i class="fab fa-facebook-f"></i
            ></a>
    
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com/" role="button"
            ><i class="fab fa-twitter"></i
            ></a>
    
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"
            ><i class="fab fa-instagram"></i
            ></a>
    
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button"
            ><i class="fab fa-github"></i
            ></a>
        </section>
        <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; 2023. Todos los derechos reservados. <br> Maracaibo - Edo. Zulia. <br> Venezuela.
        
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>