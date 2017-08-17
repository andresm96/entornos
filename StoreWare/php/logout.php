<?php
  // Inicializar la sesión.
  // Si está usando session_name("algo"), ¡no lo olvide ahora!
  session_start();

  // Destruir todas las variables de sesión.
  $_SESSION = array();

  // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
  // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }

  // Finalmente, destruir la sesión.
  session_destroy();

  $success = '<div class="alert alert-success">Logout realizado con exito!</div>';

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Autor: Andres
         Ultima modificacion: 24/03/2017 -->
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet"
	   type="text/css"/>
    <link href="../css/styles-css/custom-login.css" rel="stylesheet"
	   type="text/css"/>
    <title>StoreWare - Logout</title>
</head>
<body>

<!-- Login content -->
    <div class="container">

        <!-- Cabecera -->
        <div class="container-header">
            <h4><span class="glyphicon glyphicon-lock"></span> Logout</h4>
        </div>

        <!-- Cuerpo -->
        <div class="container-body">
            <?php
                echo $success;
            ?>
        <a href="../index.php"><button class="btn btn-primary">Volver a StoreWare!</button></a>
        </div>
    </div>

</body>
</html>
