
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
       
        <form action="registro2.php" method="POST">
          <h3 style="text-align: center;background-color: lightgray;">Ingresar</h3>
        <label>Username</label>
        <br>
        <input type="text" name="Username">
        <br>
        <label>Password</label>
        <br>
        <input type="Password" name="Password">
        <br>
        <label>email</label>
        <br>
        <input type="email" name="email">
        <br>
        <label>Nombre</label>
        <br>
        <input type="text" name="Nombre">
        <br>
        <label>ApellidoP</label>
        <br>
        <input type="text" name="ApellidoP">
        <br>
        <label>ApellidoM</label>
        <br>
        <input type="text" name="ApellidoM">
        <br>  
  <label>Metodo de pago</label>
  <select class="browser-default"name="metodpago">
    <option value="Efectivo">Efectivo</option>
      <option value="Tarjeta">Tarjeta</option>
      <option value="Paypal">Paypal</option>
      <option value="Puntos">Puntos</option>
  </select> <br> 
        <input type="submit" value="Registrarse">
        </form>


      </div>



      <div class="principio1" style="flex-grow: 1 ">
          <?php require_once 'login-why.php'; ?>
      
    </div>

<footer id="pie">
        <p style="background-color: lightgray;">&copy; CUTonala - 2019</p>
    </footer>

  </body>
  </html>

  