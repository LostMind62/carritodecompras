<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Usernamee=$_POST['Username'];
  $Passwordd=$_POST['Password'];
}

rep_user($Usernamee,$Passwordd);

function rep_user($Usernamee,$Passwordd)
{
$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);


$buscar_sql = "Call rep_user('$Usernamee')";
$insertar = mysqli_query($enlace, $buscar_sql);
if (mysqli_num_rows($insertar)!=0) {
  $insertar=mysqli_fetch_array($insertar);
      if (password_verify($Passwordd, $insertar['password'])==1) {
             $_SESSION['error_reg']="esta bien";
             $_SESSION['usuario']=$Usernamee;
             $_SESSION['carrito']=array();
             $buscar_sql = " SELECT `inicio`($Usernamee)";
				$insertar = mysqli_query($enlace, $buscar_sql);
             header ('Location: index.php');
                          }
            else{$_SESSION['error_reg']="la contraseña esta mal";
                    header ('Location: index.php');}
}

else{
   $_SESSION['error_reg']=$Usernamee." el usuario no existe";
 header ('Location: index.php');
}
}


 ?>