<!DOCTYPE html>
<html lang="en">
<?php include("../validate.php");
$carro=$_SESSION['carro'];
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout - StoreWare</title>

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
                    <li><a href="checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                    <?php
                        if ($visible) {
                            echo ("<li><a>Bienvenido <b>" . $_SESSION["usuario"] .
                            "</b></a></li>");
                            if ($admin) {
                                echo ("<li>
                                <a href="."../admin-cp.php".">Panel de Control</a>
                                </li>");
                            }
                            ?>
                            <li><a href="../php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                            <?php
                        }
                        else {
                          ?>
                            <li><a href="../login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                        <?php }  ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-hover table-condensed">

                    <thead>
            <tr>
              <th style="width:60%">Producto</th>
              <th style="width:10%">Precio</th>
              <th style="width:8%">ID</th>
              <th style="width:12%" class="text-center">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-th="Producto">
                <div class="row">
                  <div class="col-md-10">
                    <p>NOMBRE PRODUCTO</p>
                  </div>
                </div>
              </td>
              <td data-th="Precio">$1.99</td>
              <td data-th="ID">1</td>
              <td data-th="Subtotal" class="text-center">$ PRECIO PRODUCTO</td>
            </tr>
          </tbody>
          <tfoot>
            <tr class="visible-xs">
              <td class="text-center"><strong>Total 1.99</strong></td>
            </tr>
            <tr>
              <td></td>
              <td colspan="2" class="hidden-xs text-right"><strong>Total:</strong></td>
              <td class="hidden-xs text-center"><strong>$ TOTAL</strong></td>
            </tr>
          </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                <a href="index.php"><button type="button" class="btn btn-primary">Continuar comprando</button></a>
            </div>
            <div class="col-md-2 col-md-offset-4">
                <button id="checkout" type="button" class="btn btn-success">Checkout</button>
            </div>
        </div>
    </div> -->

    <h1 align="center">Carrito</h1>
    <?php
    $carro=$_SESSION['carro'];
    if($carro){
    ?>
    <table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
    <td width="105"><b>Producto</b></td>
    <td width="207"><b>Precio</b></td>
    <td width="100" align="center"><b>Borrar</b></td>
    </tr>
    <?php
    $suma=0;
    foreach($carro as $k => $v){
    $subto=$v['precio'];
    $suma=$suma+$subto;
    ?>
    <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
    <td><?php echo $v['producto'] ?></td>
    <td><?php echo $v['precio'] ?></td>
    <td align="center"><a href="borracar.php?<?php echo SID ?>&id=<?php echo $v['identificador'] ?>"><img src="trash.gif" width="12" height="14" border="0"></a></td>
    </tr></form>
    <?php }?>
    </table>
    <br><br>
    <div align="center"><span class="prod">Total de Artículos: <?php echo count($carro); ?></span>
    </div><br>
    <div align="center"><span class="prod">Total: $<?php echo number_format($suma,2); ?></span></div>
    <br>
    <div align="center"><span class="prod">Continuar la selección de productos</span>
    <a href="../index.php?<?php echo SID;?>"><img src="continuar.gif" width="13" height="13" border="0" align="absmiddle"></a>&nbsp;
    <a href="regpago.php?<?php echo SID;?>&costo=<?php echo $suma; ?>"><img src="finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle"></a>
    </div>
    <?php }

    else{ ?>
    <p align="center"> <span class="prod">No hay productos seleccionados</span> <a href="../index.php?<?php echo SID;?>"><img src="continuar.gif" width="13" height="13" border="0"></a>
    <?php }?>


    <!-- cart table -->


    <!-- footer -->
    <div class="container">
        <hr>
        <footer>
                <div class="row" style="text-align:center">
                <div class="col-lg-12">
                    <p>Copyright &copy; StoreWare 2017 </p>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>
