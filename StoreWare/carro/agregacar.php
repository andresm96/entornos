<?php
include("../php/conexion.inc");
session_start();
$id = $_POST['id_producto'];
//Si ya hemos introducido algún producto en el carro lo tendremos guardado temporalmente en el array superglobal $_SESSION['carro'], de manera que rescatamos los valores de dicho array y se los asignamos a la variable $carro, previa comprobación con isset de que $_SESSION['carro'] ya haya sido definida
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
//Ahora introducimos el nuevo producto en la matriz $carro, utilizando como índice el id del producto en cuestión, encriptado con md5. Utilizamos md5 porque genera un valor alfanumérico que luego, cuando busquemos un producto en particular dentro de la matriz, no podrá ser confundido con la posición que ocupa dentro de dicha matriz, como podría ocurrir si fuera sólo numérico.
//Cabe aclarar que si el producto ya había sido agregado antes, los nuevos valores que le asignemos reemplazarán a los viejos.
$carro[$id]=array('identificador'=>$id,'producto'=>$_POST['nombre'],'precio'=>$_POST['precio']);
//Ahora dentro de la sesión ($_SESSION['carro']) tenemos sólo los valores que teníamos (si es que teníamos alguno) antes de ingresar a esta página y en la variable $carro tenemos esos mismos valores más el que acabamos de sumar. De manera que
//tenemos que actualizar (reemplazar) la variable de sesión por la variable $carro.
$_SESSION['carro']=$carro;
header('Location: checkout.php');
?>
