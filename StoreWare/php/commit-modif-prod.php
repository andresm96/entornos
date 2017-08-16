<?php
    session_start();
    $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
    mysqli_select_db($conn, "storeware");

    $id = $_SESSION["idprod"];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sqlUpdate = "UPDATE producto SET nombre='$nombre', precio='$precio', stock='$stock' WHERE id_producto=$id";

    $resultado=mysqli_query($conn,$sqlUpdate) or die (mysqli_error($conn));

    if($resultado)
    {
        $success = '<div class="alert alert-success">El producto se ha modificado exitosamente!</div>';
    }
    else {
        $success = '<div class="alert alert-danger">Ha ocurrido un error inexplicable!</div>';
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Entornos" content="StoreWare">

        <title>Administrator CP</title>

        <link href="../css/styles-css/cp-styles.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/shop-homepage.css" rel="stylesheet">

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">StoreWare • Control Panel</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Administrador</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav -->

        <!-- body of the main page -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="lead">Bienvenido Administrador</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="../admin-cp.php">Listado</a></li>
                                <li role="presentation"><a href="../admin-alta-prod.php">Alta</a></li>
                                <li role="presentation"><a href="../admin-baja-prod.php">Baja</a></li>
                                <li role="presentation" class="active"><a href="../admin-modif-prod.php">Modificacion</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="../admin-cp-user.php">Listado</a></li>
                                <li role="presentation"><a href="../admin-alta-user.php">Alta</a></li>
                                <li role="presentation"><a href="../admin-baja-user.php">Baja</a></li>
                                <li role="presentation"><a href="../admin-modif-user.php">Modificacion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-7 col-md-offset-1">
                    <h1>Modificar un producto</h1>
                    <hr>

                    <?php
                        echo $success;
                    ?>
                    
                    <a href="../admin-modif-prod.php"><button type="button" class="btn btn-primary">Volver al menu de modificacion</button></a>
                </div>
            </div>
        </div>

        <!-- end body of main page -->

        <!-- Footer -->
        <hr>
        <footer>
            <div class="row" style="text-align:center">
                <div class="col-lg-12">
                    <p>Copyright &copy; StoreWare 2017 - All rights reserved • Created by Andres, Mauricio, Julian and Tomas.</p>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>