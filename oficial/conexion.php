<?php 
session_start();
if (isset($_SESSION['error_reg'])) {
	if (!empty($_SESSION['error_reg'])||$_SESSION['error_reg']!=0) {


	echo " <script> alert('".$_SESSION['error_reg']."'); </script>";
	$_SESSION['error_reg']=0;
}

}
 ?>