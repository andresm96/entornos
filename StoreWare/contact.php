<!DOCTYPE html>
<?php 
    include("validate.php");

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sendto = "admin@storeware.com";
        $formcontent="De: $name \n Mensaje: $message";
        $mailheader = "De: $email \r\n";

        mail($sendto, $subject, $formcontent, $mailheader);
        $result = '<div class="alert alert-sucess">Gracias! Tome un cafe, lo contactaremos a la brevedad.</div>';
    }
    
?>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>StoreWare - Contacto</title>

        <link href="css/styles-css/contactform-styles.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/shop-homepage.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="index.php">StoreWare</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="about-services.php">Servicios</a>
                        </li>
                        <li>
                            <a href="contact.php">Contacto</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="carro/checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span> Ir al carro</a></li>
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
                                <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                                <?php
                            }
                            else {
                              ?>
                                <li><a href="registro-login.html">Registrarse</a></li>
                                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                            <?php }  ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav -->
            <h1 style="text-align:center">Pongase en contacto con nosotros</h1>
        <div class="container map">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.868446653849!2d-60.64585033878075!3d-32.954482486117264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab11d0eb49c3%3A0x11f1d3d54f950dd0!2sUTN-FRRO%2C+Universidad+Tecnol%C3%B3gica+Nacional+-+Facultad+Regional+Rosario!5e0!3m2!1ses-419!2sar!4v1490369624629" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <hr>
        <!-- contact form -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-2">

                    <form name="contactform" method="post" action="contact.php" role="form">

                        <div class="form-group">
                            <label for="user">Nombre completo</label>
                            <input type="text" class="form-control" name="name" placeholder="Gabe Newell" required>
                        </div>

                        <div class="form-group">
                            <label for="user">E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="mimail@midominio.com" required>
                        </div>

                        <div class="form-group">
                            <label for="user">Asunto</label>
                            <select name="sports" class="form-control">
                                <option value="consulta">Consulta general</option>
                                <option value="pedido">Realizar un pedido</option>
                                <option value="problem">Problema en la compra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user">Su consulta, comentarios o sugerencias</label>
                            <textarea id="message" name="message" placeholder="Amo StoreWare!" style="height:200px" required=""></textarea>
                        </div>

                        <button type="reset" value="Reset" class="btn btn-default" >Limpiar</button>
                        <input type="submit" value="Enviar mensaje" class="btn btn-success pull-right"></input>

                        <?php
                        if (isset($_POST['submit'])) {
                            echo $result;
                        }
                        ?>

                     </form>         
                </div>
                <div class="col-md-3">
                    <ul>
                        <li class="data"><i class="fa fa-phone fa-2x fonticon" style="vertical-align: middle;"></i>341 4558888</li>
                        <li class="data"><i class="fa fa-map-marker fa-2x fonticon" style="vertical-align: middle;"></i>Zeballos 1337</li>
                        <li class="data"><i class="fa fa-envelope-o fa-2x fonticon" style="vertical-align: middle;"></i>info@storeware.com.ar</li>
                        <li class="data"><i class="fa fa-facebook fa-2x fonticon" style="vertical-align: middle;"></i>/StoreWare</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- contact form -->

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
