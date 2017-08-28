<!DOCTYPE html>
<html lang="en">
<?php include("validate.php") ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Entornos" content="StoreWare">
    <title>401 Error</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/styles-css/custom-index.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">StoreWare</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about-services.php">Servicios</a>
                    </li>
                    <li>
                        <a href="contact.php">Contacto</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="checkout.html"><span class="glyphicon glyphicon-shopping-cart"></span> Ir al carro</a></li>

                    <?php
                        if ($visible) {
                            echo ("<li><a>Bienvenido <b>" . $_SESSION["usuario"] .
                            "</b></a></li>");
                            if ($admin) {
                                echo ("<li>
                                <a href="."admin-cp.php".">Panel de Control</a>
                                </li>");
                            }
                            ?>
                            <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                            <?php
                        }
                        else {
                          ?>
                            <li><a href="registro-login.html">Registrarse</a></li>
                            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                        <?php }  ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- nav -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1 class="error401">401</h1>
                <p class="error401">¡No tiene permiso para estar aquí!</p>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row" style="text-align:center">
                <div class="col-lg-12">
                    <p>Copyright &copy; StoreWare 2017 - All rights reserved • Created by Andres, Mauricio, Julian and Tomas.</p>
                </div>
            </div>
        </footer>   

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
