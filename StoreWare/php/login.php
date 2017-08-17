<?php
    include("conexion.inc");
    session_start();

    $_SESSION["usuario"] = NULL;
    $vUsuario=$_POST["username"];
    $vContraseña=$_POST["password"];

    $vSql = "SELECT * FROM cliente WHERE usuario='$vUsuario'";
    $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));
    $vCantFilas = mysqli_num_rows($vResultado);
    $vExtraido = mysqli_fetch_array($vResultado);

    if ($vCantFilas ==0){
        $success = '<div class="alert alert-danger">Usuario y/o contraseña incorrectos.</div>';
    }
    else{
        $_SESSION["usuario"] = $vExtraido['usuario'];

        if($vExtraido['tipo_usu']==1){
            $_SESSION["admin"]=true;
        }
        else {
            $_SESSION["admin"] = false;
        }

        $success = '<div class="alert alert-success">Login exitoso! Bienvenido <b>'. $vExtraido['usuario'] . '</b></div>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Autor: Andres
         Ultima modificacion: 24/03/2017 -->
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet"
	   type="text/css"/>
    <link href="../css/styles-css/custom-login.css" rel="stylesheet"
	   type="text/css"/>
    <title>StoreWare - Login</title>
</head>
<body>

<!-- Login content -->
    <div class="container">

        <!-- Cabecera -->
        <div class="container-header">
            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>

        <!-- Cuerpo -->
        <div class="container-body">
            <?php
                echo $success;
            ?>
        <a href="../index.php"><button class="btn btn-primary">Volver a StoreWare!</button></a>
        </div>
    </div>

</body>
</html>

