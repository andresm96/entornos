<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="mauriminio96@gmail.com";
$asunto= $_POST['asunto'];
$desde='From:' .$_POST['email'];
$comentario= "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Asunto: $_POST[asunto]\n
Consulta: $_POST[texto]\n
Enviado: $fecha a las $hora\n
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Su consulta ha sido enviada, en breve recibir� nuestra
respuesta.";
?>
