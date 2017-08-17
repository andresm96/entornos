<?php

    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vNombre = $_POST['nombre'];
    $vApellido = $_POST['apellido'];
    $vDireccion = $_POST['direccion'];
    $vTelefono = $_POST['telefono'];
    $vEmail = $_POST['email'];
    $vUsuario = $_POST['usrname'];
    $vPassword = $_POST['psw'];

    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT * FROM cliente WHERE usuario='$vUsuario'";
    $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));;
    $vCantFilas = $vResultado->num_rows;

    //$vCantUsuarios = mysqli_result($vResultado, 0);
    if ($vCantFilas !=0){
        $mensaje = '<div class="alert alert-warning">El usuario ya esta registrado.</div>';
    }
    else {
    $vSql = "INSERT INTO cliente (nombre, apellido, direccion,
                                    telefono, email, tipo_usu,
                                    usuario, contrasenia)
    values ('$vNombre','$vApellido', '$vDireccion', '$vTelefono',
                '$vEmail', 0, '$vUsuario', '$vPassword')";
    mysqli_query($con, $vSql) or die (mysqli_error($con));
    
    $mensaje = '<div class="centered alert alert-success">Registro exitoso!</div>';

    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    }
    // Cerrar la conexion
    mysqli_close($con);
    ?>

 <!DOCTYPE html>
<html>
<head>
    <!-- Autor: Andres
         Ultima modificacion: 24/03/2017 -->
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet"
	   type="text/css"/>
    <link href="../css/styles-css/custom-register.css" rel="stylesheet"
	   type="text/css"/>
    <title>StoreWare - Registrarse</title>
</head>
<body>

<!-- Login content -->
    <div class="container">

        <div class="centered container-header">
            <h1>Registrarse</h1>
        </div>

        <!-- Cuerpo -->
        <div class="centered container-body">
            <?php
                echo $mensaje;
            ?>
            <a href="../index.php"><button class="btn btn-primary">Volver a StoreWare!</button></a>
 
        </div>
    </div>

</body>
</html>
