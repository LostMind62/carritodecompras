<?php
session_start();
 
 


 if($_POST['popo']=='borrar')
{
	unset($_SESSION['carrito'][$_POST['custId']]);

$_SESSION['error_reg']='Se ha borrado exitosamente el producto';

 echo "<html><head></head>".
"<body onload=\"javascript:history.back()\">".
"</body></html>";
exit;
}
if($_POST['popo']=='pagar')
{

$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);


 numexist();
}



function numexist()
{
		$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);


	$buscar_sql = "SELECT * FROM tiket ORDER BY id DESC LIMIT 1";
//Enviar la informacion a la tabla para que sea insertada
$insertar = mysqli_query($enlace, $buscar_sql);

$insertar=mysqli_fetch_assoc($insertar);
if ($insertar>0) {
 ingres($insertar['id']+1);
}
else{ingres('1'); }
 }

function ingres($numero)
{
	$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);

foreach ($_SESSION['carrito'] as $key => $value) {
	$idproducto=$key;
	$cantidad=$value['cantidad'];
	$precio=$value['precio'];
	
	$buscar_sql = "INSERT INTO tiket VALUES($numero,'$idproducto','$cantidad','$precio',CURRENT_TIME())";
	$insertar = mysqli_query($enlace, $buscar_sql);
	
}

$_SESSION['error_reg']="Has acabado :DDDDDDDD";
$_SESSION['carrito']='';
echo "<html><head></head>".
"<body onload=\"javascript:history.back()\">".
"</body></html>";
exit;
}







?>