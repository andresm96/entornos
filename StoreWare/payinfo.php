<?php
  unset($_SESSION['carro']);
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
    <title>Login</title>
    <style>
      h1{
        color: green;
      }
    </style>
</head>
<body>

<!-- Login content -->
    <div class="container">

        <!-- Cabecera -->
        <div class="container-body">
            <h1><span class="glyphicon glyphicon-ok"></span> </h1>
            <h2>Gracias por su compra!</h2>
            <br><br>
            <p>Le enviaremos la factura junto a los datos de la compra a su email.</p>

        </div>

        <!-- Cuerpo -->
        <div class="container-body">
        <a href="../index.php"><button class="btn btn-primary">Volver a StoreWare!</button></a>
        </div>
    </div>

</body>
</html>