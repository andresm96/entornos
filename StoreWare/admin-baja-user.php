<?php include("restrict.php") ?>

<?php

    if (isset($_POST["submit"])) {

        include("./php/conexion.inc");

        $bajaId = $_POST['idbaja'];

        //Hacemos la consulta para verificar si el ID existe

        $consulta = "SELECT * from cliente WHERE id_cliente=$bajaId";

        $resultado=mysqli_query($con, $consulta) or die (mysqli_error($con));

        if(mysqli_num_rows($resultado) != 0) {

            $consulta = "DELETE FROM cliente WHERE id_cliente=$bajaId";
            $resultado=mysqli_query($con, $consulta);

            if($resultado) {
                $resultado = '<div class="alert alert-success">El usuario se ha eliminado exitosamente!</div>';
            }
            else {
                $resultado = '<div class="alert alert-danger">Ha habido un error al eliminar el usuario</div>';
            }
        }
        else {

            $resultado = '<div class="alert alert-danger">Ha habido un error al eliminar el usuario o el mismo no existe.</div>';
        }

        // mysqli_free_result($resultado);
        mysqli_close($con);
    }
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

        <link href="css/styles-css/cp-styles.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/shop-homepage.css" rel="stylesheet">

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
                      <li><a><span class="glyphicon glyphicon-user"></span> <?php echo ("$_SESSION[usuario]"); ?></a></li>
                        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
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
                                <li role="presentation"><a href="admin-cp.php">Listado</a></li>
                                <li role="presentation"><a href="admin-alta-prod.php">Alta</a></li>
                                <li role="presentation"><a href="admin-baja-prod.php">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-prod.php">Modificacion</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="admin-cp-user.php">Listado</a></li>
                                <li role="presentation"><a href="admin-alta-user.php">Alta</a></li>
                                <li role="presentation" class="active"><a href="admin-baja-user.php">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-user.php">Modificacion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <h1>Baja de un usuario</h1> <hr>

                    <form class="form-group" action="admin-baja-user.php" method="post">
                        <div class="form-group">
                            <input class="form-control" type="number" min="0" name="idbaja" placeholder="Ingrese el ID del usuario a eliminar" required>
                        </div>
                        <button type="reset" value="Reset" class="btn btn-default" >Limpiar</button>
                        <input type="submit" class="btn btn-danger pull-right" name="submit" value="Eliminar">
                        <br><br>
                        <?php
                            if (isset($_POST["submit"])) {
                                echo $resultado;
                            }
                        ?>

                    </form>
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
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
