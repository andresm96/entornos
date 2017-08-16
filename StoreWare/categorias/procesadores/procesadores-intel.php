<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Intel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php">StoreWare</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../about-services.php">Servicios</a>
                    </li>
                    <li>
                        <a href="../../contact.php">Contacto</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../../checkout.html"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
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
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                            <?php
                        }
                        else {
                          ?>
                            <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                        <?php }  ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Categorías</p>

                <div class="panel-group">
                  <div class="panel panel-default">
                    <a data-toggle="collapse" href="#collapse-almacenamiento" class="panel-title">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          Almacenamiento
                        </h4>
                      </div>
                    </a>
                    <div id="collapse-almacenamiento" class="panel-collapse collapse">
                      <ul class="list-group">
                        <a href="../almacenamiento/almacenamiento-hdd.php"><li class="list-group-item">HDD</li></a>
                        <a href="../almacenamiento/almacenamiento-ssd.php"><li class="list-group-item">SSD</li></a>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="panel-group">
                  <div class="panel panel-default">
                    <a data-toggle="collapse" href="#collapse-fuentes" class="panel-title">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          Fuentes
                        </h4>
                      </div>
                    </a>
                    <div id="collapse-fuentes" class="panel-collapse collapse">
                      <ul class="list-group">
                        <a href="../fuentes/fuentes-genericas.php"><li class="list-group-item">Genéricas</li></a>
                        <a href="../fuentes/fuentes-80.php"><li class="list-group-item">80+</li></a>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="panel-group">
                  <div class="panel panel-default">
                    <a data-toggle="collapse" href="#collapse-memorias" class="panel-title">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          Memorias
                        </h4>
                      </div>
                    </a>
                    <div id="collapse-memorias" class="panel-collapse collapse">
                      <ul class="list-group">
                        <a href="../memorias/memorias-ddr3.php"><li class="list-group-item">DDR3</li></a>
                        <a href="../memorias/memorias-ddr4.php"><li class="list-group-item">DDR4</li></a>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="panel-group">
                  <div class="panel panel-default">
                    <a data-toggle="collapse" href="#collapse-motherboards" class="panel-title">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          Motherboards
                        </h4>
                      </div>
                    </a>
                    <div id="collapse-motherboards" class="panel-collapse collapse">
                      <ul class="list-group">
                        <a href="../motherboards/motherboard-am4.php"><li class="list-group-item">AM4</li></a>
                        <a href="../motherboards/motherboard-1150.php"><li class="list-group-item">1150</li></a>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="panel-group">
                  <div class="panel panel-default">
                    <a data-toggle="collapse" href="#collapse-procesadores" class="panel-title">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          Procesadores
                        </h4>
                      </div>
                  </a>
                    <div id="collapse-procesadores" class="panel-collapse collapse">
                      <ul class="list-group">
                        <a href="../procesadores/procesadores-amd.php"><li class="list-group-item">AMD</li></a>
                        <a href="../procesadores/procesadores-intel.php"><li class="list-group-item">Intel</li></a>
                      </ul>
                    </div>
                  </div>
                </div>
          </div>
<!-- // CUERPO DE LA PAGINA // -->
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <?php
                $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
                mysqli_select_db($conn, "storeware");
                $sql = "SELECT * FROM producto WHERE id_subcategoria = 502; ";
                $resultado = mysqli_query($conn, $sql);
                $resultado = mysqli_query($conn, $sql);
                $total_registros=mysqli_num_rows($resultado);
            ?>

              <table class="table table-striped">
                  <thead>
                      <tr>
                          <td><b>Nombre</b></td>
                          <td><b>Precio Unitario</b></td>
                          <td><b>Stock</b></td>
                          <td></td>
                      </tr>
                </thead>

                  <tbody>
                  <?php
                  while ($fila = mysqli_fetch_array($resultado))
                  {
                  ?>

                  <tr>
                      <td><?php echo ($fila['nombre']); ?></td>
                      <td>$AR <?php echo ($fila['precio']); ?></td>
                      <td><?php echo ($fila['stock']); ?></td>
                      <?php
                       if (isset ($_SESSION['usuario'])) {
                         echo ("<td><button type="."button"." class="."btn btn-default btn-sm".">");
                        echo ("<span class="."glyphicon glyphicon-plus"."></span> Add");
                        echo ("</button></td>"); }
                      ?>
                  </tr>

                    <?php
                        }
                        // Liberar conjunto de resultados
                        mysqli_free_result($resultado);
                        // Cerrar la conexion
                        mysqli_close($conn);
                    ?>
                  </tbody>
               </table>
        </div>
    </div>
</div>
<!-- // FIN CUERPO DE PAGINA // -->
          <!-- /.container -->

          <div class="container">

              <hr>

              <!-- Footer -->
              <footer>
                  <div class="row" style="text-align:center">
                      <div class="col-lg-12">
                          <p>Copyright &copy; StoreWare 2017</p>
                      </div>
                  </div>
              </footer>

          </div>
          <!-- /.container -->

          <!-- jQuery -->
          <script src="../../js/jquery.js"></script>

          <!-- Bootstrap Core JavaScript -->
          <script src="../../js/bootstrap.min.js"></script>

</body>
</html>
