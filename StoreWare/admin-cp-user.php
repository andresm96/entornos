<?php include("restrict.php") ?>
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
                    <a class="navbar-brand" href="index.php">StoreWare</a><a href="#" class="navbar-brand">•</a><a class="navbar-brand" href="index-cp.php">Control Panel</a>
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
                        <li role="presentation" class="active"><a href="admin-cp-user.php">Listado de usuarios</a></li>
                        <li role="presentation"><a href="admin-alta-user.php">Nuevo usuario</a></li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <h1>Listado de usuarios</h1>

                    <form class="form-group" action="admin-cp-user.php" method="post">
                        <div class="input-group">
                            <select name="cliente" class="form-control">
                                <option>Administradores</option>
                                <option>Clientes</option>
                            </select>
                            <span class="input-group-btn">
                                <input class="btn btn-primary" type="submit" name="btnListar" value="Listar">
                            </span>
                        </div>
                    </form><hr>

                    <?php
                        include("./php/conexion.inc");

                        if (isset($_POST['cliente'])) {

                            $selectedcat = $_POST['cliente'];

                            if ($selectedcat == "Administradores")
                            {
                                $subcat=1;
                            }

                            if ($selectedcat == "Clientes")
                            {
                                $subcat=0;
                            }

                            $sql = "SELECT * FROM cliente where tipo_usu like '$subcat%'";
                            $resultado = mysqli_query($con, $sql);
                            $total_registros=mysqli_num_rows($resultado);

                            ?>

                            <form class="form-inline" action="admin-baja-modif-user.php" method="post">
                                <div class="form-group">
                                    <a class="btn btn-success" href="admin-alta-user.php" role="button">Nuevo usuario</a>
                                </div>
                                <div class="form-group pull-right">
                                    <input type="number" min='0' class="form-control" name="id_user" id="id_user" placeholder="Ingrese ID" required>
                                    <button type="submit" class="btn btn-warning" name="update" value="update">Modificar</button>
                                    <button type="submit" class="btn btn-danger" name="delete" value="delete">Eliminar</button>
                                </div>
                            </form>
                            <br>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td><b>ID</b></td>
                                        <td><b>Usuario</b></td>
                                        <td><b>Nombre</b></td>
                                        <td><b>Apellido</b></td>
                                        <td><b>Direccion</b></td>
                                        <td><b>Telefono</b></td>
                                        <td><b>Email</b></td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        while ($fila = mysqli_fetch_array($resultado))
                                        {
                                    ?>

                                    <tr>
                                        <td><?php echo ($fila['id_cliente']); ?></td>
                                        <td><?php echo ($fila['usuario']); ?></td>
                                        <td><?php echo ($fila['nombre']); ?></td>
                                        <td><?php echo ($fila['apellido']); ?></td>
                                        <td><?php echo ($fila['direccion']); ?></td>
                                        <td><?php echo ($fila['telefono']); ?></td>
                                        <td><?php echo ($fila['email']); ?></td>

                                    </tr>

                                    <?php
                                        }
                                        // Liberar conjunto de resultados
                                        mysqli_free_result($resultado);
                                        // Cerrar la conexion
                                        mysqli_close($con);
                            }
                            ?>
                        </tbody>
                    </table>
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
