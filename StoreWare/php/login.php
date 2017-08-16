<?php
  include("conexion.inc");
  session_start();

  $_SESSION["usuario"] = NULL;
  $vUsuario=$_POST['usrname'];
  $vContraseña=$_POST['psw'];

  $vSql = "SELECT usuario FROM cliente WHERE usuario='$vUsuario'";
  $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));
  $vCantFilas = $vResultado->num_rows;

  if ($vCantFilas ==0){
    echo ("El Usuario no Existe<br><br>");
    echo ("<A href='../login.html'>Volver</A>");
  }
  else{
    $vFila = mysqli_data_seek ($vResultado, 0);
    $vExtraido = mysqli_fetch_array($vFila);
    $_SESSION["usuario"] = $vExtraido[8];
    $_SESSION["admin"] = isAdmin($vExtraido);
    echo ("Login exitoso<br><br>");
    echo ("<A href='../index.html'>Volver</A>");
  }

  function isAdmin($vExtraido){
    $vAdmin=false;
    if($vExtraido[7]==1){
      $vAdmin=true;
    }
    return $vAdmin;
  }
 ?>
