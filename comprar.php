<?php 
session_start();
$arrayName = array('nombre' => $_POST['nombre'],'cantidad' => $_POST['cantidad'],'precio' => $_POST['precio'], );


	 

if (empty($_SESSION['carrito'])) {
	$_SESSION['carrito']=array();
	$_SESSION['carrito'][$_POST['custId']]=$arrayName;
}
else{ 
if (array_key_exists($_POST['custId'], $_SESSION['carrito'])) {
	$_SESSION['carrito'][$_POST['custId']]['cantidad']=$_SESSION['carrito'][$_POST['custId']]['cantidad']+$_POST['cantidad'];
	// echo $_SESSION['carrito'][$_POST['custId']]['cantidad'] ;
	}
else{$_SESSION['carrito'][$_POST['custId']]=$arrayName;
	}

	}	
	$_SESSION['error_reg']="Se ha agregado ".$_POST['nombre']." exitosamente el producto";

echo "<html><head></head>".
"<body onload=\"javascript:history.back()\">".
"</body></html>";
exit;

?>
