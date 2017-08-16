<?php

  session_start();
  $visible=false;
  if(isset($_SESSION["usuario"])){
    $visible = true;
    if($_SESSION["admin"]){
      $admin = true;
    }
    else{
      $admin = false;
    }
  }

 ?>
