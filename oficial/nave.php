<?php 
if (!empty($_SESSION['usuario'])) {
echo "		<nav>";
echo "		    <div class='nav-wrapper_black' >";
echo "		      <a href='#' class='brand-logo'>Logo</a>";
echo "		      <ul id='nav-mobile' class='right hide-on-med-and-down'>";
echo "		        <li><a href='index.php'>Inicio</a></li><li>";

echo "		        <li><a href='carrito.php'>Categorias</a></li><li>";
echo "		        <li><a href='logout.php'>CERRAR SESSION</a></li><li>";
echo "		        <li><a href='cuenta.php'>".$_SESSION['usuario']."</a></li><li>";
echo "		        <li><a href='carito.php'>Carrito de compras".suma()."</a></li><li>";
echo "		      </ul>";
echo "		    </div>";
echo "		  </nav>";
}
else{
echo "		<nav>";
echo "		    <div class='nav-wrapper_black' >";
echo "		      <a href='#' class='brand-logo'>Logo</a>";
echo "		      <ul id='nav-mobile' class='right hide-on-med-and-down'>";
echo "		        <li><a href='index.php'>Inicio</a></li><li>";
echo "		        <li><a href='registro.php'>registro</a></li><li>";
echo "		      </ul>";
echo "		    </div>";
echo "		  </nav>";

}
function cat()
{
echo "		<ul id='dropdown1' class='dropdown-content'>	";
echo "	  <li><a href='#!'>one</a></li>	";
echo "	  <li><a href='#!'>two</a></li>	";
echo "	  <li class='divider'></li>	";
echo "	  <li><a href='#!'>three</a></li>	";
echo "	</ul>	";
echo "	<nav>	";
echo "	  <div class='nav-wrapper'>	";
echo "	    <a href='#!' class='brand-logo'>Logo</a>	";
echo "	    <ul class='right hide-on-med-and-down'>	";
echo "	      <li><a href='sass.html'>Sass</a></li>	";
echo "	      <li><a href='badges.html'>Components</a></li>	";
echo "	      <!-- Dropdown Trigger -->	";
echo "	      <li><a class='dropdown-trigger' href='#!' data-target='dropdown1'>Dropdown<i class='material-icons right'>arrow_drop_down</i></a></li>	";
echo "	    </ul>	";
echo "	  </div>	";
echo "	</nav>	";
}

function suma()
{
if (!empty($_SESSION['carrito'])) {
	$total=count($_SESSION['carrito']);
echo $total;}
else{ echo "0"; }
}
?>