<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Usernamee=$_POST['Username'];
  $Passwordd=$_POST['Password'];
  $emaill=$_POST['email'];
  $Nombree=$_POST['Nombre'];
  $ApellidoPP=$_POST['ApellidoP'];
  $ApellidoMM=$_POST['ApellidoM'];
  $Metodopagoo=$_POST['metodpago'];
}

rep_user($Usernamee,$emaill);


function rep_user($Usernamee,$emaill)
{
	$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);


$buscar_sql = "Call rep_user('$Usernamee')";
//Enviar la informacion a la tabla para que sea insertada
$insertar = mysqli_query($enlace, $buscar_sql);
if (mysqli_num_rows($insertar)>0) {
   $_SESSION['error_reg']=$Usernamee."username no disponible";

 header ('Location: registro.php');
  
}
else{rep_email($emaill);}
 }


function rep_email($emaill)
{

	$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);

	
  $buscar_sql = "Call rep_email('$emaill');";
//Enviar la informacion a la tabla para que sea insertada
$insertar = mysqli_query($enlace, $buscar_sql);
if (mysqli_num_rows($insertar)!=0) {
   $_SESSION['error_reg']="email utilizado";
 header ('Location: registro.php');

}else{chido();}
}

function chido()
{



	$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);

	$Usernamee=$_POST['Username'];
  $Passwordd=$_POST['Password'];
  $emaill=$_POST['email'];
  $Nombree=$_POST['Nombre'];
  $ApellidoPP=$_POST['ApellidoP'];
  $ApellidoMM=$_POST['ApellidoM'];
  $Metodopagoo=$_POST['metodpago'];
  $password_segura = password_hash($Passwordd, PASSWORD_BCRYPT,['cost'=> 4]);
  $_SESSION['error_reg']="Su cuenta a sido creada EXITOSAMENTE!!";
 header ('Location: index.php');

  $insertar_sql = "INSERT INTO usuarios VALUES (NULL,'$Usernamee','$password_segura','$Nombree','$emaill','$ApellidoPP','$ApellidoMM','$Metodopagoo')";
//Enviar la informacion a la tabla para que sea insertada
$insertar = mysqli_query($enlace, $insertar_sql);

}
?>