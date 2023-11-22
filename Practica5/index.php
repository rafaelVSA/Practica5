<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php   
    if (isset($_POST['btnEntrar']) && $_POST['btnEntrar'] == 'INGRESAR') {

        if(isset($_POST['usuario']) && isset($_POST['contrasena'])){

            if(!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
                $usuarioAdmin= "admin";
                $contrasenaAdmin="admin";
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];
                if($usuarioAdmin==$usuario && $contrasenaAdmin==$contrasena){
                    header('Location: menu.php');
                    exit();
                }else{
                    echo '<script language="javascript">alert("incorrecto");</script>';
                }
            }else{
                echo '<script language="javascript">alert("datos vacios");</script>';
            }
        }else{
            echo '<script language="javascript">alert("no se enviaron los datos");</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body{
            background-image: url(assets/img/fondoLogin2.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
        .btnLogin{
            background-color:black !important;
            border-color: black !important;
            width:65%;
            height: 38px;
        }
        .container{
            width: 60% !important;
        }
        .btn-Ingresar{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    
    <section class="h-100 gradient-form" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
            <div class="card rounded-3 text-white" style="background-color: #740000;"> 
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-center">
                                <h1 class="mt-1 mb-5 pb-1">iCar Plus</h1>
                            </div>

                            <form method="POST">
                                <p>Ingresa los Datos:</p>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="usuraio">Usuario</label>
                                    <input type="text" name="usuario" class="form-control" placeholder="Escribe el usuario" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="contrasena">Contraseña</label>
                                    <input type="password" name="contrasena" class="form-control" placeholder="Escribe la contraseña" />
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <input type="submit" value="INGRESAR" name="btnEntrar" class="btn-Ingresar btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btnLogin">
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <img src="assets/img/login.jpeg" alt="Error..."  width="110%">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>

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