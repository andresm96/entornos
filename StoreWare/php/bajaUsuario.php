<?php

      include("conexion.inc");

      //Captura datos desde el Form baja usuario
      $vUsuario = $_POST['usrname'];

      //Arma la instrucción SQL y luego la ejecuta
      $vSql = "SELECT * FROM cliente WHERE usuario='$vUsuario'";
      $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));;
      $vCantFilas = $vResultado->num_rows;

      //$vCantUsuarios = mysqli_result($vResultado, 0);
      if ($vCantFilas !=0){

        $vSql = "DELETE FROM cliente WHERE usuario='$vUsuario'";
        mysqli_query($con, $vSql) or die (mysqli_error($con));
        echo("El Usuario fue eliminado<br><br>");

        echo ("<A href='../index.php'>VOLVER AL MENU</A>");
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);

      }
      else {
        echo ("El Usuario no existe<br>");
        echo ("<A href='login.html'>Volver</A>");
      }
      // Cerrar la conexion
      mysqli_close($con);

?>
