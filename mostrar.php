
  <!DOCTYPE html>
  <html>
  <head>
       <title>index</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="hola.css">
      <link rel="stylesheet" type="text/css" href="index.css">  
      <script type="text/javascript" src="jovencito.js"></script>
  <style type="text/css">
    #principi {
      display: flex;
      flex-wrap: wrap;
    }
    #principi > div{
      height: 200px;
    }
  </style>
  </head>

  <body>
    <div>
  <?php require_once 'conexion.php'; ?>
  <?php require_once 'nave.php'; ?>




   <div class="principio">
      <div class="principio1" style="flex-grow: 1">
        <h4>bienvenido</h4>
        <p style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="principi" style="flex-grow: 8">
          <?php 
$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);
$cat= $_GET['categoria'];
$buscar_sql = "SELECT * FROM productos WHERE categoria = '" .$cat."'";
$insertar = mysqli_query($enlace, $buscar_sql);

while($nota1 = mysqli_fetch_assoc($insertar)){
    echo "<div class='row'>";
    echo "<div class='col s12 m7'>";
    echo "  <div class='card'>";
    echo "    <div class='card-image'>";
    echo "<form action='comprar.php' method='post'>";

    echo " <img src='".$nota1['imagen']."'>";
    echo "      <span class='card-title'>".$nota1['nombre']."</span>";
    echo "    </div>";
    echo "    <div class='card-content'>";
    echo "      <p>".$nota1['descripcion'].".</p>";
    echo "    </div>";
    echo "    <div class='card-action'>";
    echo "Cantidad: <input type='number' id='cantidad' name='cantidad' required>";
    echo "         <input type='hidden' id='nombre' name='nombre' value=".$nota1['nombre'].">";
    echo "         <input type='hidden' id='precio' name='precio' value=".$nota1['precio'].">";
    echo "         <input type='hidden' id='custId' name='custId' value=".$nota1['id_producto'].">";
    echo "            <button class='btn waves-effect waves-light' type='submit' name='popo' value='mostrar'>comprar</button>";
    echo "</form>";
    echo "    </div>";
    echo "  </div>";
   echo " </div>";
 echo " </div>";
}
?>

      

      </div>
     <!--  <div class="principio1" style="flex-grow: 1 ">
        <?php require_once 'login-why.php'; ?>
      
    </div> -->
</div>
<footer id="pie">
        <p style="background-color: lightgray;">&copy; CUTonala - 2019</p>
    </footer>

  </body>
  </html>