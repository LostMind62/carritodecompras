<!DOCTYPE html>
<html>
<head>

	<title></title>
	      
</head>
<body>
<form enctype="multipart/form-data" action="agregar.php" method="POST"   >
	<select name="categoria" required="">
  <option value="pastas">pastas</option>
  <option value="pizzas">pizzas</option>
  <option value="risotto">risotto</option>
</select><br><br>



imagen: <input type="file" name="imagen" required=""><br><br>
        
nombre <input type="text" name="nombre" required=""><br><br>
descripcion <input type="text" name="descripcion" required=""><br><br>
precio <input type="number" name="precio"><br><br>
<input type="submit" name="popo " value="subir"><br><br><br>
</form>

<?php require_once 'mostrar.php'; ?>

<?php //  if ($_POST['popo']=='mostrar') {
	 	//echo '<script type="text/javascript">
   // var y= prompt("'.$_POST['custId'].'");
   //</script>';} 

	?>


</body>
</html>