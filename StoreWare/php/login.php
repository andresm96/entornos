<?php
  include("conexion.inc");
  session_start();

  $_SESSION["usuario"] = NULL;
  $vUsuario=$_POST["username"];
  $vContraseña=$_POST["password"];

  $vSql = "SELECT usuario FROM cliente WHERE usuario='$vUsuario'";
  $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));
  $vCantFilas = mysqli_num_rows($vResultado);

  if ($vCantFilas ==0){
    echo ("El Usuario no Existe<br><br>");
    echo ("<A href='../login.html'>Volver</A>");
  }
  else{
    $vFila = mysqli_fetch_assoc($vResultado);
    $vExtraido = mysqli_fetch_array($vFila,0);
    $_SESSION["usuario"] = $vExtraido["usuario"];
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
