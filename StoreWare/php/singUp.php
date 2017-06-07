<?php

  include("conexion.inc");
  //Captura datos desde el Form anterior
  $vNombre = $_POST['nombre'];
  $vApellido = $_POST['apellido'];
  $vDireccion = $_POST['direccion'];
  $vTelefono = $_POST['telefono'];
  $vEmail = $_POST['email'];
  $vUsuario = $_POST['usrname'];
  $vPassword = $_POST['psw'];

  //Arma la instrucción SQL y luego la ejecuta
  $vSql = "SELECT * FROM cliente WHERE usuario='$vUsuario'";
  $vResultado = mysqli_query($con, $vSql) or die (mysqli_error($con));;
  $vCantFilas = $vResultado->num_rows;

  //$vCantUsuarios = mysqli_result($vResultado, 0);
  if ($vCantFilas !=0){
   echo ("El Usuario ya Existe<br>");
   echo ("<A href='login.html'>Volver</A>");
  }
  else {
    $vSql = "INSERT INTO cliente (nombre, apellido, direccion,
                                  telefono, email, tipo_usu,
                                  usuario, contrasenia)
    values ('$vNombre','$vApellido', '$vDireccion', '$vTelefono',
              '$vEmail', 0, '$vUsuario', '$vPassword')";
    mysqli_query($con, $vSql) or die (mysqli_error($con));
    echo("El Usuario fue Registrado<br><br>");

    echo ("<A href='../index.php'>VOLVER AL MENU</A>");
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
  }
  // Cerrar la conexion
  mysqli_close($con);
 ?>
