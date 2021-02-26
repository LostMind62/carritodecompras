<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require 'conexion.php';
  $Usernamee=$_POST['Username'];
  $Passwordd=$_POST['Password'];
  $emaill=$_POST['email'];
  $Nombree=$_POST['Nombre'];
  $ApellidoPP=$_POST['ApellidoP'];
  $ApellidoMM=$_POST['ApellidoM'];
}


 ?>