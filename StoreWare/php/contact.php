<?php
    // https://bootstrapbay.com/blog/working-bootstrap-contact-form/
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message']) {
        $result = '<div class="text-danger">Por favor verifica que todos los campos esten completos.</div>';
    }
    else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sendto = "admin@storeware.com";
        $formcontent="De: $name \n Mensaje: $message";
        $mailheader = "De: $email \r\n";

        mail($sendto, $subject, $formcontent, $mailheader);
        $result = '<div class="text-success">Gracias! Tome un cafe, lo contactaremos a la brevedad.</div>';
    }
?>
