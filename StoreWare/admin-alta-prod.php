<?php include("restrict.php") ?>

<?php

    if (isset($_POST["submit"])) {

        include("./php/conexion.inc");
        
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $subcategoria = $_POST['subcategoria'];
        $img = "0";

        // Hacemos una consulta para buscar la categoria
        $sqlcat = "SELECT * from subcategoria where nombre = '$subcategoria'";
        $resultado = mysqli_query($con, $sqlcat);
        $fila = mysqli_fetch_array($resultado);
        $idsubcat = $fila['id_subCategoria'];

        $sqlinsert = "INSERT INTO producto (nombre, precio, stock, id_subcategoria, foto) VALUES ('$nombre', '$precio', '$stock', '$idsubcat', '$img')";

        $sucess=mysqli_query($con, $sqlinsert) or die (mysqli_error($con));

        if($sucess){
            $success = '<div class="alert alert-success">El producto se ha registrado exitosamente!</div>';
        }

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
                                <li role="presentation" class="active"><a href="admin-alta-prod.php">Alta</a></li>
                                <li role="presentation"><a href="admin-baja-prod.php">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-prod.php">Modificacion</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="admin-cp-user.php">Listado</a></li>
                                <li role="presentation"><a href="admin-alta-user.php">Alta</a></li>
                                <li role="presentation"><a href="admin-baja-user.php">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-user.php">Modificacion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <h1>Alta de un nuevo producto</h1> <hr>

                    <form class="form-group" action="admin-alta-prod.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto..." required>
                        </div>
                        <div class="form-group">
                            <input type="number" min="0" class="form-control" name="precio" placeholder="Precio del producto..." required>
                        </div>
                        <div class="form-group">
                            <input type="number" min="0" class="form-control" name="stock" placeholder="Stock disponible..." required>
                        </div>
                        <div class="form-group">
                            <select name="subcategoria" class="form-control">
                                <option>HDD</option>
                                <option>SDD</option>
                                <option>Genericas</option>
                                <option>80+</option>
                                <option>DDR3</option>
                                <option>DDR4</option>
                                <option>AM4</option>
                                <option>1150</option>
                                <option>AMD</option>
                                <option>Intel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="reset" value="Reset" class="btn btn-default" >Limpiar</button>
                            <input type="submit" class="btn btn-primary pull-right" name="submit" value="Cargar producto">
                        </div>

                        <?php
                            if (isset($_POST["submit"])) {
                                echo $success;
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
