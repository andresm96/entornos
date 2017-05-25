<?php
  include("conexion.inc");
  session_start();
  $vUsuario=$_POST['usrname'];
  $vContraseña=$_POST['psw'];

  function userExist($usuario){

      $vSql = "SELECT * FROM cliente WHERE usuario='$vUsuario'";
      $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));
      $vCantFilas = $vResultado->num_rows;

      if ($vCantFilas !=0){
       echo ("El Usuario ya Existe<br>");
       echo ("<A href='login.html'>Volver</A>");
      }
    }
    return;
  }
 ?>
