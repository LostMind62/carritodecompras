
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
$cat= $_SESSION['usuario'];
$buscar_sql = "SELECT * FROM usuarios WHERE Username = '" .$cat."'";
$insertar = mysqli_query($enlace, $buscar_sql);

$nota1 = mysqli_fetch_assoc($insertar);
echo "    <form action='cuenta.php' method='POST'>";
echo "          <h3 style='text-align: center;background-color: lightgray;'>tu cuenta ".$nota1['username']." </h3>";
echo "        <label>Username</label>";
echo "        <br>";
echo "        <input type='text' name='Username'value='".$nota1['username']."''>";
echo "        <br>";
echo "        <label>Password</label>";
echo "        <br>";
echo "        <input type='Password' name='Password'value='".$nota1['password']."''>";
echo "        <br>";
echo "        <label>email</label>";
echo "        <br>";
echo "       <input type='email' name='email'value='".$nota1['email']."''>";
echo "         <br>";
echo "        <label>Nombre</label>";
echo "        <br>";
echo "        <input type='text' name='Nombre'value='".$nota1['nombre']."''>";
echo "        <br>";
echo "        <label>ApellidoP</label>";
echo "        <br>";
echo "        <input type='text' name='ApellidoP'value='".$nota1['apellidop']."''>";
echo "       <br>";
echo "        <label>ApellidoM</label>";
echo "        <br>";
echo "        <input type='text' name='ApellidoM' value='".$nota1['apellidom']."''>";
echo "        <br>  ";
echo "        <input type='submit' value='Registrarse'>";
echo "        </form>";
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
  <?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Usernamee=$_POST['Username'];
  $Passwordd=$_POST['Password'];
  $emaill=$_POST['email'];
  $Nombree=$_POST['Nombre'];
  $ApellidoPP=$_POST['ApellidoP'];
  $ApellidoMM=$_POST['ApellidoM'];
  
change('email','$emaill','$_SESSION["usuario"]');
change('nombre','$Nombree','$_SESSION["usuario"]');
change('ApellidoP','$ApellidoPP','$_SESSION["usuario"]');
change('ApellidoM','$ApellidoMM','$_SESSION["usuario"]');
changepass('Password','$Passwordd','$_SESSION["usuario"]');


if ($Usernamee!=$_SESSION['usuario']) {
 $host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);
$cat= $_SESSION['user'];

$buscar_sql = "CALL Change('$campo','$valor','$Usernamee' )";
$insertar = mysqli_query($enlace, $buscar_sql);


}







function change($campo,$valor,$usuario)
{
$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);


$buscar_sql = "CALL Change('$campo','$valor','$usuario' )";
$insertar = mysqli_query($enlace, $buscar_sql);


}
function changepass($campo,$valor,$usuario)
{
$host = "localhost";
$usuario = "juan";
$password = "juan";
$db = "tienda";
$enlace = mysqli_connect($host, $usuario, $password, $db);

$campo=password_hash($campo, PASSWORD_BCRYPT,['cost'=> 4]);
$buscar_sql = "CALL Change('$campo','$valor','$usuario' )";
$insertar = mysqli_query($enlace, $buscar_sql);


}





}
   ?>