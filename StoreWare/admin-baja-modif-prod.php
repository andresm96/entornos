<?php 

    include("restrict.php");
    include("./php/conexion.inc");

    $idprod = $_POST['id_prod'];

    $sql = "SELECT * FROM producto where id_producto=$idprod";
    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con));
    $fila = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Entornos" content="StoreWare">

        <title>StoreWare - CP</title>

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
                      <li><a><span class="glyphicon glyphicon-user"></span><b> <?php echo ("$_SESSION[usuario]"); ?></b></a></li>
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
                    <p class="lead">Bienvenido <?php echo ("$_SESSION[usuario]"); ?></p>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="active"><a href="admin-cp.php">Listado</a></li>
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
                                <li role="presentation"><a href="admin-baja-user.php">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-user.php">Modificacion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">

                    <?php if(mysqli_num_rows($resultado) > 0 && isset($_POST['update'])) { ?>
                        <h1>Modificación de producto</h1>
                        <hr>
                        <form class="form-group" action="php/commit-modif-prod.php" method="post">
                            <div class="form-group">
                                <label for="nombre">ID seleccionado:</label>
                                <input type="number" class="form-control" name="id" value="<?php echo($fila['id_producto']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre del producto:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo($fila['nombre']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" class="form-control" name="precio" value="<?php echo($fila['precio']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock disponible:</label>
                                <input type="number" min="0" class="form-control" name="stock" value="<?php echo($fila['stock']); ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning pull-right" name="submit" value="Modificar producto">
                            </div>
                        </form>
                    <?php } else if(mysqli_num_rows($resultado) > 0 && isset($_POST['delete'])) { ?>
                        <h1>Baja de un producto</h1>
                        <hr>
                        <form class="form-group" action="php/commit-delete-prod.php" method="post">
                            <div class="form-group">
                                <label for="nombre">ID seleccionado:</label>
                                <input type="number" class="form-control" name="id" value="<?php echo($fila['id_producto']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre del producto:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo($fila['nombre']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" class="form-control" name="precio" value="<?php echo($fila['precio']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock disponible:</label>
                                <input type="number" min="0" class="form-control" name="stock" value="<?php echo($fila['stock']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger pull-right" name="submit" value="Eliminar producto">
                            </div>
                        </form>
                    <?php } ?>
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