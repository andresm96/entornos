<?php include("restrict.php") ?>

<?php
    if (isset($_POST["submit"])) {
      include("./php/conexion.inc");

      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $direccion = $_POST['direccion'];
      $telefono = $_POST['telefono'];
      $email = $_POST['email'];
      $tipo_usu = $_POST['tipo_usu'];
      $usuario = $_POST['usuario'];
      $contrasenia = $_POST['contrasenia'];

      $sqlinsert = "INSERT INTO cliente (nombre,apellido,direccion,telefono,email,tipo_usu,usuario,contrasenia)
          VALUES ('$nombre','$apellido','$direccion','$telefono','$email','$tipo_usu','$usuario','$contrasenia')";
      $sucess = mysqli_query($con,$sqlinsert) or die (mysqli_error($con));

      if($sucess){
          $success = '<div class="alert alert-success">El usuario se ha registrado exitosamente!</div>';
      }
      else {
          $success = '<div class="alert alert-danger">Ha ocurrido un error inexplicable!</div>';
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
                        <li role="presentation"><a href="admin-cp.php">Listado de productos</a></li>
                        <li role="presentation"><a href="admin-alta-prod.php">Nuevo producto</a></li>
                        <li role="presentation"><a href="admin-cp-user.php">Listado de usuarios</a></li>
                        <li role="presentation" class="active"><a href="admin-alta-user.php">Nuevo usuario</a></li>
                    </ul>
                </div>

                <div class="col-md-7 col-md-offset-1">
                    <h1>Alta de un nuevo usuario</h1>
                    <hr>
                    <form class="form-group" action="admin-alta-user.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del usuario..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido del usuario..." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="direccion" placeholder="Direccion del usuario..." required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="telefono" placeholder="Telefono del usuario..." required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email del usuario..." required>
                        </div>
                        <div class="form-group">
                            <select name="tipo_usu" class="form-control">
                                <option value="1">Admin</option>
                                <option value="0">Cliente</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario del usuario..." required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña del usuario..." required>
                        </div>
                        <div class="form-group">
                            <button type="reset" value="Reset" class="btn btn-default" >Limpiar</button>
                            <input type="submit" class="btn btn-primary pull-right" name="submit" value="Cargar usuario">
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
