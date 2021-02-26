<?php 


$target_dir = "subir/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);

move_uploaded_file($_FILES["imagen"]["tmp_name"],$target_file);

$selectOption = $_POST['categoria'];

  $nombre=$_POST['nombre'];
  $precio=$_POST['precio'];
  $descripcion=$_POST['descripcion'];


$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);

// echo var_dump($selectOption);
// echo $target_file;
// echo $nombre;
// echo $precio;



$buscar_sql = "INSERT INTO productos VALUES (NULL,'$selectOption','$target_file','$nombre','$descripcion','$precio')";
$insertar = mysqli_query($enlace, $buscar_sql);
if ($insertar) {
	echo "subio";
}else{
    echo "error: ".mysqli_error($enlace);
}




 ?>