<?php
session_start();
unset($_SESSION['carro']);
header('Location: checkout.php');
 ?>
