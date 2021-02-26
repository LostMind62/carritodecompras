
  <!DOCTYPE html>
  <html>
  <head>
       <title>index</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="hola.css">
      <link rel="stylesheet" type="text/css" href="index.css">  
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
        <div class="slider">
          <h4 style="text-align: center;background-color: lightgray;">Mejores Productos</h4>
    <ul>
      <li><p>Peperoni</p><img src="img/popo1.jpg" id="primera" width="100%" height="365" align="center;"></li>
      <li><p>Queso</p><img src="img/popo2.jpg" id="primera" width="100%" height="365" align="center;"></li>
      <li><p>Hawaina</p><img src="img/popo3.jpg" id="primera" width="100%" height="365" align="center;"></li>
    </ul>
  </div>
        
  
      </div>
      <div class="principio1" style="flex-grow: 1 ">
      	<?php require_once 'login-why.php'; ?>
      
    </div>
</div>
<footer id="pie">
        <p style="background-color: lightgray;">&copy; CUTonala - 2019</p>
    </footer>

  </body>
  </html>
