@$Nombre = htmlspecialchars($_POST['Nombre']);
@$Motivo = htmlspecialchars($_POST['Motivo']);
@$Empresa = htmlspecialchars($_POST['Empresa']);
@$Correo = htmlspecialchars($_POST['Correo']);
@$Mensaje = htmlspecialchars($_POST['Mensaje']);

//Preparamos el mensaje de contacto
$cabeceras = "From: $Correo\n" //La persona que envia el correo
 . "Reply-To: $Correo\n";
$asunto = "From: CONTACTO STOREWARE $Motivo\n";
$email_to = "mauriminio96@gmail.com";
$contenido = "$Nombre ha enviado un mensaje desde el sitio web www.storeware.com.ar\n"
. "\n"
. "Nombre: $Nombre\n"
. "Motivo: $Motivo\n"
. "Empresa: $Empresa\n"
. "Correo: $Correo\n"
. "Mensaje: $Mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>Su mensaje ha sido enviado correctamente.</strong>
    </div>
  </div>
</div>';
}else{
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>ERROR. Intente mas tarde.</strong>
    </div>
  </div>
</div>';
}
