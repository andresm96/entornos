<?php
    session_start();
    unset($_SESSION['carro']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Autor: Andres
         Ultima modificacion: 24/03/2017 -->
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet"
	   type="text/css"/>
    <link href="../css/styles-css/custom-login.css" rel="stylesheet"
	   type="text/css"/>
    <title>StoreWare</title>
    <style>
      h1{
        color: green;
      }
    </style>
</head>
<body>

<!-- Login content -->
    <div class="container">

        <div class="container-body">
            <h1><span class="glyphicon glyphicon-ok"></span> </h1>
            <h2>¡Gracias por su compra!</h2>
            <br>
            <div class="alert alert-success">Le enviaremos la factura junto a los datos de la compra a su email.</div>
            <a href="../index.php"><button class="btn btn-primary">Volver a StoreWare!</button></a>
        </div>
    </div>
</body>
</html>
