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
                                <li role="presentation" class="active"><a href="admin-cp.php">Listado</a></li>
                                <li role="presentation"><a href="admin-alta-prod.php">Alta</a></li>
                                <li role="presentation"><a href="admin-baja-prod.html">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-prod.html">Modificacion</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="admin-cp-user.php">Listado</a></li>
                                <li role="presentation"><a href="admin-alta-user.html">Alta</a></li>
                                <li role="presentation"><a href="admin-baja-user.html">Baja</a></li>
                                <li role="presentation"><a href="admin-modif-user.html">Modificacion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <h1>Listado de los productos</h1>

                    <form class="form-group" action="admin-cp.php" method="post">
                        <div class="input-group">
                            <select name="categoria" class="form-control">
                                <option>Almacenamiento</option>
                                <option>Fuentes</option>
                                <option>Memorias</option>
                                <option>Procesadores</option>
                                <option>Motherboards</option>
                            </select>
                            <span class="input-group-btn">
                                <input class="btn btn-primary" type="submit" name="btnListar" value="Listar">
                            </span>
                        </div>
                    </form><hr>

                    <?php
                        $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
                        mysqli_select_db($conn, "storeware");

                        if (isset($_POST['categoria'])) {

                            $selectedcat = $_POST['categoria'];

                            if ($selectedcat == "Almacenamiento")
                            {
                                $subcat=1;
                            }

                            if ($selectedcat == "Fuentes")
                            {
                                $subcat=2;
                            }

                            if ($selectedcat == "Memorias")
                            {
                                $subcat=3;
                            }

                            if ($selectedcat == "Procesadores")
                            {
                                $subcat=5;
                            }

                            if ($selectedcat == "Motherboards")
                            {
                                $subcat=4;
                            }

                            $sql = "SELECT * FROM producto where id_subcategoria like '$subcat%'";
                            $resultado = mysqli_query($conn, $sql);
                            $total_registros=mysqli_num_rows($resultado);

                            ?>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td><b>ID</b></td>
                                        <td><b>Nombre</b></td>
                                        <td><b>Precio</b></td>
                                        <td><b>Stock</b></td>
                                        <td><b>Categoria</b></td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        while ($fila = mysqli_fetch_array($resultado))
                                        {
                                    ?>

                                    <tr>
                                        <td><?php echo ($fila['id_producto']); ?></td>
                                        <td><?php echo ($fila['nombre']); ?></td>
                                        <td><?php echo ($fila['precio']); ?></td>
                                        <td><?php echo ($fila['stock']); ?></td>
                                        <td><?php echo ($fila['id_subcategoria']); ?></td>
                                    </tr>

                                    <?php
                                        }
                                        // Liberar conjunto de resultados
                                        mysqli_free_result($resultado);
                                        // Cerrar la conexion
                                        mysqli_close($conn);
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
