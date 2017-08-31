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
        <link href="../../css/pagination.css" rel="stylesheet">

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
                        <li role="presentation" class="active"><a href="admin-cp.php">Listado de productos</a></li>
                        <li role="presentation"><a href="admin-alta-prod.php">Nuevo producto</a></li>
                        <li role="presentation"><a href="admin-cp-user.php">Listado de usuarios</a></li>
                        <li role="presentation"><a href="admin-alta-user.php">Nuevo usuario</a></li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <h1>Listado de los productos</h1>

                    <form class="form-group" action="admin-cp.php" method="GET">
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
                        include("./php/conexion.inc");
                        if (isset($_GET['categoria'])) {

                            $selectedcat = $_GET['categoria'];

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

                            $TAMANO_PAGINA = 3;
                            if (isset($_GET["pagina"])) {
                              $pagina = $_GET["pagina"];
                            }
                            else {
                              $pagina = 1;
                            }
                            //Comprueba si está seteado el GET de HTTP
                            if (!$pagina) {
                              $inicio = 0;
                              $pagina=1;
                            }
                            else {
                                $inicio = ($pagina - 1) * $TAMANO_PAGINA;
                            }
                            //miro a ver el número total de campos que hay en la tabla con esa búsqueda
                            //miro a ver el número total de campos que hay en la tabla con esa búsqueda
                            $sql = "SELECT * FROM producto WHERE id_subcategoria LIKE '$subcat%'";
                            $resultado = mysqli_query($con, $sql);
                            $total_registros = mysqli_num_rows($resultado);
                            //calculo el total de páginas
                            $total_paginas = ceil($total_registros / $TAMANO_PAGINA);

                            //pongo el número de registros total, el tamaño de página y la página que se muestra
                            /*echo "Número de registros encontrados: " . $total_registros . "<br>";
                            echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>";
                            echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>";*/

                            //construyo la sentencia SQL
                            $sql = "SELECT * FROM producto WHERE id_subcategoria LIKE '$subcat%' LIMIT " . $inicio . "," . $TAMANO_PAGINA;
                            $resultado = mysqli_query($con, $sql);
                            ?>

                            <form class="form-inline" action="admin-baja-modif-prod.php" method="post">
                                <div class="form-group">
                                    <a class="btn btn-success" href="admin-alta-prod.php" role="button">Nuevo producto</a>
                                </div>
                                <div class="form-group pull-right">
                                    <input type="number" min='0' class="form-control" name="id_prod" id="id_prod" placeholder="Ingrese ID" required>
                                    <button type="submit" class="btn btn-warning" name="update" value="update">Modificar</button>
                                    <button type="submit" class="btn btn-danger" name="delete" value="delete">Eliminar</button>
                                </div>
                            </form>
                            <br>

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
                                        mysqli_close($con);
                                        //Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
                                        //Nota: X = $total_paginas
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="center">
                      <ul class="pagination">
                    <?php
                    if (isset($total_paginas)) {
                      for ($i=1; $i<=$total_paginas; $i++) {
                        //En el bucle, muestra la paginación
                        if ($i == $pagina) {
                          echo "<li class="."active"."><a href='admin-cp.php?pagina=".$i."&categoria=".$selectedcat."'>".$i."</a></li> ";
                        }
                        else {
                          echo "<li><a href='admin-cp.php?pagina=".$i."&categoria=".$selectedcat."'>".$i."</a></li> ";
                        }
                      }
                    }
                     ?>
                      </ul>
                    </div>
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
