<?php 
    include("restrict.php");
    include("./php/conexion.inc");

    $iduser = $_POST['id_user'];
    $_SESSION["id_user"] = $iduser;

    $sql = "SELECT * FROM cliente where id_cliente=$iduser";
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
                        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
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
                        <li role="presentation"><a href="admin-cp.php">Listado de productos</a></li>
                        <li role="presentation"><a href="admin-alta-prod.php">Nuevo producto</a></li>
                        <li role="presentation"><a href="admin-cp-user.php">Listado de usuarios</a></li>
                        <li role="presentation"><a href="admin-alta-user.php">Nuevo usuario</a></li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">

                    <?php if(mysqli_num_rows($resultado) > 0 && isset($_POST['update'])) { ?>
                        <h1>Modificación de usuario</h1>
                        <hr>
                        <form class="form-group" action="php/commit-modif-user.php" method="post">
                            <div class="form-group">
                                <label for="nombre">ID seleccionado:</label>
                                <input type="number" class="form-control" name="id" value="<?php echo($fila['id_cliente']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo($fila['nombre']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="precio">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" value="<?php echo($fila['apellido']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Direccion:</label>
                                <input type="text" min="0" class="form-control" name="direccion" value="<?php echo($fila['direccion']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Telefono:</label>
                                <input type="text" min="0" class="form-control" name="telefono" value="<?php echo($fila['telefono']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">E-Mail:</label>
                                <input type="email" min="0" class="form-control" name="email" value="<?php echo($fila['email']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Usuario:</label>
                                <input type="text" min="0" class="form-control" name="usuario" value="<?php echo($fila['usuario']); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Contraseña:</label>
                                <input type="text" min="0" class="form-control" name="password" value="<?php echo($fila['contrasenia']); ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning pull-right" name="submit" value="Modificar usuario">
                            </div>
                        </form>
                    <?php } else if(mysqli_num_rows($resultado) > 0 && isset($_POST['delete'])) { ?>
                        <h1>Baja de un usuario</h1>
                        <hr>
                        <form class="form-group" action="php/commit-delete-user.php" method="post">
                            <div class="form-group">
                                <label for="nombre">ID seleccionado:</label>
                                <input type="number" class="form-control" name="id" value="<?php echo($fila['id_cliente']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo($fila['nombre']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="precio">Apellido:</label>
                                <input type="text" class="form-control" name="apellido" value="<?php echo($fila['apellido']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stock">Direccion:</label>
                                <input type="text" min="0" class="form-control" name="direccion" value="<?php echo($fila['direccion']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stock">Telefono:</label>
                                <input type="text" min="0" class="form-control" name="telefono" value="<?php echo($fila['telefono']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stock">E-Mail:</label>
                                <input type="email" min="0" class="form-control" name="email" value="<?php echo($fila['email']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stock">Usuario:</label>
                                <input type="text" min="0" class="form-control" name="usuario" value="<?php echo($fila['usuario']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stock">Contraseña:</label>
                                <input type="text" min="0" class="form-control" name="password" value="<?php echo($fila['contrasenia']); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger pull-right" name="submit" value="Eliminar usuario">
                            </div>
                        </form>
                    <?php } else { ?>
                        <h1>Gestión de un producto</h1>
                        <hr>
                        <div class="alert alert-danger">No existe un usuario con el ID ingresado, o ha ocurrido un error en la transacción.</div>
                        <a class="btn btn-primary" href="admin-cp-user.php" role="button">Volver al listado</a>
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