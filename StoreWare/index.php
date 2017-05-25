<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Entornos" content="StoreWare">
    <title>StoreWare</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
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
                        <a href="about-services.html">Servicios</a>
                    </li>
                    <li>
                        <a href="contact.html">Contacto</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="checkout.html"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav -->

    <!-- Page Content -->
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
                        <a href="categorias/almacenamiento/almacenamiento-hdd.php"><li class="list-group-item">HDD</li></a>
                        <a href="categorias/almacenamiento/almacenamiento-ssd.php"><li class="list-group-item">SSD</li></a>
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
                        <a href="categorias/fuentes/fuentes-genericas.php"><li class="list-group-item">Genéricas</li></a>
                        <a href="categorias/fuentes/fuentes-80.php"><li class="list-group-item">80+</li></a>
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
                        <a href="categorias/memorias/memorias-ddr3.php"><li class="list-group-item">DDR3</li></a>
                        <a href="categorias/memorias/memorias-ddr4.php"><li class="list-group-item">DDR4</li></a>
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
                        <a href="categorias/motherboards/motherboard-am4.php"><li class="list-group-item">AM4</li></a>
                        <a href="categorias/motherboards/motherboard-1150.php"><li class="list-group-item">1150</li></a>
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
                        <a href="categorias/procesadores/procesadores-amd.php"><li class="list-group-item">AMD</li></a>
                        <a href="categorias/procesadores/procesadores-intel.php"><li class="list-group-item">Intel</li></a>
                      </ul>
                    </div>
                  </div>
                </div>
          </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="src/img/intel-banner.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="src/img/samsung-banner.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="src/img/asus-banner.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                  <?php
                      $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
                      mysqli_select_db($conn, "storeware");

                      $sql = "SELECT * FROM producto WHERE id_subcategoria = 401; ";
                      $resultado = mysqli_query($conn, $sql);
                      $total_registros=mysqli_num_rows($resultado);
                      $fila = mysqli_fetch_array($resultado)
                  ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="src/img/motherboard-am4.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo ($fila['precio']); ?></h4>
                                <h4><a href="#">Motherboard - AM4</a>
                                </h4>
                                <p><?php echo ($fila['nombre']); ?>.</p>
                            </div>
                            <div class="ratings">
                            </div>
                        </div>
                    </div>
                    <?php
                        $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
                        mysqli_select_db($conn, "storeware");

                        $sql = "SELECT * FROM producto WHERE id_subcategoria = 302; ";
                        $resultado = mysqli_query($conn, $sql);
                        $total_registros=mysqli_num_rows($resultado);
                        $fila = mysqli_fetch_array($resultado)
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="src/img/memorias-ddr4.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo ($fila['precio']); ?></h4>
                                <h4><a href="#">Memorias - DDR4</a></h4>
                                <p><?php echo ($fila['nombre']); ?>.</p>
                            </div>
                        </div>
                    </div>
                    <?php
                        $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
                        mysqli_select_db($conn, "storeware");

                        $sql = "SELECT * FROM producto WHERE id_subcategoria = 502; ";
                        $resultado = mysqli_query($conn, $sql);
                        $total_registros=mysqli_num_rows($resultado);
                        $fila = mysqli_fetch_array($resultado)
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="src/img/procesadores-intel.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo ($fila['precio']); ?></h4>
                                <h4><a href="#">Procesadores - Intel</a></h4>
                                <p><?php echo ($fila['nombre']); ?>.</p>
                            </div>
                        </div>
                    </div>

                </div>

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
                    <p>Copyright &copy; StoreWare 2017</p>
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
