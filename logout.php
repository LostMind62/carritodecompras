<?php 
session_start();
  unset($_SESSION["usuario"]);
   $_SESSION["usuario"]='';
  unset($_SESSION["carrito"]);
   $_SESSION["carrito"]='';
   session_destroy();
  header("Location: index.php");
  exit;

 ?>