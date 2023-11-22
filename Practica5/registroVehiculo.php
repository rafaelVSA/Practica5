<!-- 
    Programacion Web
    Seccion: N-1013
    Rafael V. Sanchez A.
    30.393.016

-->

<?php
    include_once('assets/conexion.php');
    $clientes= "SELECT * FROM cliente";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehiculos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body{
            background-image: url(assets/img/cliente.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        }
        .login-dark {
            height:750px;
        }

        .login-dark form {
            max-width:320px;
            width:90%;
            background-color:#1e2833;
            padding:40px;
            border-radius:4px;
            color:#fff;
            box-shadow:3px 3px 4px rgba(0,0,0,0.2);
            display: table;
            margin:auto;
            margin-top:2%;            
        }
        .login-dark .illustration {
            text-align:center;
            padding:15px 0 20px;
            font-size:100px;
            color:#2980ef;
        }
        .login-dark form .form-control {
            background:none;
            border:none;
            border-bottom:1px solid #434a52;
            border-radius:0;
            box-shadow:none;
            outline:none;
            color:inherit;
        }
        .login-dark form .btn-primary {
            background:#214a80;
            border:none;
            border-radius:4px;
            padding:11px;
            box-shadow:none;
            margin-top:26px;
            text-shadow:none;
            outline:none;
        }
        .login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
            background:#214a80;
            outline:none;
        }
        .login-dark form .forgot {
            display:block;
            text-align:center;
            font-size:12px;
            color:#6f7a85;
            opacity:0.9;
            text-decoration:none;
        }
        .login-dark form .forgot:hover, .login-dark form .forgot:active {
            opacity:1;
            text-decoration:none;
        }

        .login-dark form .btn-primary:active {
            transform:translateY(1px);
        }
        h3{
            text-align:center;
        }
        select{
            appearance:none;
            outline:0;
            border:0;
            box-shadow:none;
            flex:1;
            padding:0 1em;
            color: white;
            background-color:#434a52; 
            background-image:none;
            cursor:pointer;
        }
        select::-ms-expand{
            display:none;
        }
        .select{
            position: relative;
            display: flex;
            width:15em;
            height:2.5em;
            border-radius:.50em;
            overflow:hidden;
        }
        .select::after{
            content:"\25BC";
            position: absolute;
            top:0;
            right:0;
            padding: 1em;
            background-color:#434a52;
            transition:.25s all ease;
            pointer-events: none;
        }
        .select:hover::after{
            color:#434a52;
        }
        .textarea{
            resize:none;
        }    
    </style>
</head>

<body>
    <div class="login-dark">
        <form action="datosVehiculo.php" method="post" enctype="multipart/form-data">
            <h3>Registro de Vehículos</h3><br>
            <label for="cliente">Cliente</label>
            <div class="form-group select">
                <select name="cliente" id="cliente">
                    <?php $resultado = mysqli_query($connect, $clientes);
                    
                    while($row=mysqli_fetch_assoc($resultado))  { ?>
                    <option value="<?php echo $row["cedula"]; ?>"> <?php echo $row["nombre"] . " / " . $row["cedula"]; ?> </option> 
                    <?php } mysqli_free_result($resultado) ?>
                </select><br><br>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="placa" id="placa" placeholder="Placa del vehículo" required>
            </div>
    
            <div class="form-group">
                <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="ano" id="ano" placeholder="Año del vehículo" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="color" id="color" placeholder="Color" required>
            </div>
            <div class="form-group">
                <textarea class="form-control textarea" name="descripcion" id="descripcion"  rows="4" placeholder="Descripción" required></textarea>
            </div>
            <label for="tipo">Tipo de Vehículo</label>
            <div class="form-group select">
                <select name="tipo" id="tipo">
                    <option value="minivan">minivan</option>
                    <option value="convertible">convertible</option>
                    <option value="sport">sport</option>
                    <option value="suv">suv</option>
                    <option value="hatchback">hatchback</option>
                    <option value="crossover">crossover</option>
                    <option value="sedan">sedan</option>
                </select>
            </div>
            <label for="clasificacion">Clasificación del Vehículo</label>
            <div class="form-group select">
                <select name="clasificacion" id="clasificacion">
                    <option value="pequeno">pequeño</option>
                    <option value="mediano">mediano</option>
                    <option value="grande">grande</option>
                    <option value="gama alta">gama alta</option>
                    <option value="de lujo">de lujo</option>
                </select>
            </div>
            <label for="tipo">Transmisión del Vehículo</label>
            <div class="form-group select">
                <select name="transmision" id="transmision">
                    <option value="sincronico">sincrónico</option>
                    <option value="automatico">automático</option>
                    <option value="electrico">eléctrico</option>
                </select>
            </div>
            <label for="combustible">Tipo de Compuestible</label>
            <div class="form-group select">
                <select name="combustible" id="combustible">
                    <option value="gasolina">gasolina</option>
                    <option value="diesel">diésel</option>
                    <option value="otro">otro</option>
                </select>
            </div>
            <div>
                <input type="file" name="imagen" id="imagen" class="form-control-sm">
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block" value="Enviar" id="enviar-btn" name="Enviar" type="submit">REGISTRAR</button>
            </div>
            <div class="form-group">
                <a href="vehiculo.php" class="btn btn-primary btn-block">VOLVER</a>
            </div>  
        </form>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>