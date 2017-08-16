<?php
  include("conexion.inc");
  session_start();

  $_SESSION["usuario"] = NULL;
  $vUsuario=$_POST["username"];
  $vContraseña=$_POST["password"];

  $vSql = "SELECT * FROM cliente WHERE usuario='$vUsuario'";
  $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));
  $vCantFilas = mysqli_num_rows($vResultado);
  $vExtraido = mysqli_fetch_array($vResultado);

  if ($vCantFilas ==0){
    echo ("El Usuario no Existe<br><br>");
    echo ("<A href='../login.html'>Volver</A>");
  }
  else{
    $_SESSION["usuario"] = $vExtraido['usuario'];
    if($vExtraido['tipo_usu']==1){
      $_SESSION["admin"]=true;
    }
    else {
      $_SESSION["admin"] = false;
    }
    echo ("Login exitoso<br><br>");
    echo ("<A href='../index.php'>Volver</A>");
  }

 ?>
