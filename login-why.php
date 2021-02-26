
<?php 

if (!empty($_SESSION['usuario'])) {
echo "	<h4>Por que</h4>";
echo "        <ul style='list-style: none;'>";
echo "          <li><p>Seguros</p></li>";
echo "          <li><p>Eficaces</p></li>";
echo "          <li><p>Distintas formas de pago</p></li>";
echo "          <li><p>Aceptamos todas las tarjetas</p></li>";
echo "        </ul>";
echo "      </div>";

}
else {
echo "	<form action='login.php' method='POST'>			";
echo "	    <h3 style='text-align: center;background-color: lightgray;'>Ingresar</h3>			";
echo "    	<label>Username</label>			";
echo "        <input type='text' name='Username' required=''>			";
echo "    	<label>Password</label>			";
echo "        <input type='Password' name='Password' required=''>			";
echo "        <button class='btn waves-effect waves-light' type='submit' name='action'>			";
echo "    <i class='material-icons right'>send</i>			";
echo "  </button>			";

echo "        </form>			";
echo "<p>Aun no tienes cuenta??</p>";
echo "<a href='registro.php'>registrate</a>";

}


 ?>