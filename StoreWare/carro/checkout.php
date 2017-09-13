<?php include("../validate.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StoreWare - Carrito</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../index.php">StoreWare</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../about-services.php">Servicios</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contacto</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ir al carro</a></li>
                    <?php
                        if ($visible) {
                            echo ("<li><a>Bienvenido <b>" . $_SESSION["usuario"] .
                            "</b></a></li>");
                            if ($admin) {
                                echo ("<li>
                                <a href="."../index-cp.php".">Panel de Control</a>
                                </li>");
                            }
                            ?>
                            <li><a href="../php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                            <?php
                        }
                        else {
                          ?>
                            <li><a href="../registro-login.html">Registrarse</a></li>
                            <li><a href="../login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                        <?php }  ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- cart table -->
    <h1 style="text-align:center;">Mi carrito</h1>
    <hr>
    <?php
    if (isset($_SESSION['carro'])) {
      $carro=$_SESSION['carro'];
      }
      else {
        $carro = false;
      }
    if($carro){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-hover table-condensed">
                    <thead>
                    <tr>
                      <th style="width:50%">Producto</th>
                      <th style="width:20%">Precio</th>
                      <th style="width:10%">Borrar</th>
                    </tr>
                  </thead>
                <?php
                $suma=0;
                foreach($carro as $k => $v){
                $subto=$v['precio'];
                $suma=$suma+intval($subto);
                ?>
                <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
                  <tbody>
                    <tr>
                      <td data-th="Producto">
                        <div class="row">
                          <div class="col-md-10">
                            <?php echo $v['producto'] ?>
                          </div>
                        </div>
                      </td>
                      <td data-th="Precio">$ <?php echo $v['precio'] ?></td>
                      <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['identificador'] ?>"><button type="button" name="button" class="btn btn-default">Eliminar</button></a></td>
                    </tr>
                  </tbody> </form>
                <?php }?>
                </table>
                <tfoot>
                  <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs text-right"><strong>Total de Articulos:</strong></td>
                    <td class="hidden-xs text-center"><strong><?php echo count($carro); ?></strong></td>
                  </tr>
                  <br><br>
                  <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs text-right"><strong>Total:</strong></td>
                    <td class="hidden-xs text-center"><strong>$ <?php echo number_format($suma,2); ?></strong></td>
                  </tr>
                </tfoot>
                <br><br><br>
                <a href="../index.php"><button type="button" class="btn btn-primary">Continuar comprando</button></a>
                  <a href="limpiar.php"><button id="clean" type="button" name="button" class="btn btn-danger" >Limpiar Carro</button></a>
                <a href="../payinfo.php"><button id="checkout" type="button" class="btn btn-success">Checkout</button></a>
                </div>
                <?php }
                else{ ?>
                    <br>
                    <p style="text-align:center;"><span class="prod alert alert-warning"><b>No hay productos seleccionados</b></span>
                    <br><br><br>
                    <a href="../index.php"><button type="button" class="btn btn-primary">Ir al Store</button></a>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container">
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
    </div>

</body>
</html>