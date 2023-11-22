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
    <title>Vehiculos</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
         
        @import url(https://fonts.googleapis.com/css?family=Oswald:400,700);
        @import url(https://use.fontawesome.com/releases/v6.4.2/css/all.css);
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);

        body{
            background-image: url(assets/img/cliente.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
        #contenedor{
            margin: auto;
            display: table;
            padding-top: 5%;
        }

        ul{
            position: relative;
            transform:skewY(-15deg);

        }
        li{
            position: relative;
            list-style: none;
            width: 200px;
            padding: 15px;
            background: #3e3f46;
            z-index: calc(1 * var(--i));
            transition: 0.5s;
        }

        li:hover{
            background: #740000;
            transform: translateX(-50px);
        }

        li:before{
            font-family: "FontAwesome";
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            content: attr(data-icon);
            position: absolute;
            top: 0;
            left: -40px;
            width: 40px;
            height: 100%;
            background: #740000;
            transform-origin: right;
            transform: skewY(45deg);
            transition: 0.5s;
        }

        li:hover::before{
            background: #3e3f46;
        }

        li::after{
            content: "";
            position: absolute;
            top: -40px;
            left: 0px;
            width: 100%;
            background: #86589d;
            transform-origin: bottom;
            transform: skewX(45deg);
            transition: 0.5s;
        }

        li:hover::after{
            background: #3e3f46; 
        }

        li a{
            text-decoration: none;
            color: white;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        li:hover a{
            color: #fff;
        }

        li:last-child::after{
        box-shadow: -120px 120px 20px rgba(0,0,0,0.25);
        }
    </style>

</head>
<body>
    <div id="contenedor">
        <br><br><br><br>
        <ul>  

            <li style="--i:4;" data-icon="&#xf2b9">
                <a href="registroVehiculo.php">Registrar</a>
            </li>   
            <li style="--i:3;" data-icon="&#xf039">
                <a href="listaVehiculo.php">Ver lista</a>
            </li>
            <li style="--i:2;" data-icon="&#xf1c1">
                <a href="vehiculoReporte.php">Reporte</a>
            </li>
            <li style="--i:1;" data-icon="&#xf08b">
                <a href="menu.php">Volver</a>
            </li>
        </ul>
        <br><br><br><br><br><br><br>

    </div>

    <br><br>
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