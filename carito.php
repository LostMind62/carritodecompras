
  <!DOCTYPE html>
  <html>
  <head>
       <title>index</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
      <div class="principi" style="flex-grow: 4">
        <form action="borrar.php" method="POST"> 
        <table>
          <?php
          $total=0;
          if (!empty($_SESSION['carrito'])) {
            echo "<tr>";
            foreach ($_SESSION['carrito'] as $key => $value) {
              echo "<form action='borrar.php' method='POST'>";
              echo "         <input type='hidden' id='custId' name='custId' value=".$key.">";
              echo "<td><input type='submit' name='popo' value='borrar'><i class='material-icons'></td>";
             foreach ($value as $key => $value2) {
              echo "<td> ".$value2."</td>";
               echo "         <input type='hidden' id='".$value2."[]' name='".$value2."[]' value=".$value2.">";
               }
               echo "<td>".$value['cantidad']*$value['precio']."</td>";
               echo "</form>";
              $total=$total+($value['cantidad']*$value['precio']);
               echo "</tr>";
            } 
             echo "<tr><td><input type='submit' name='popo' value='pagar'><i class='material-icons'></td><td></td><td>total:</td><td>".$total."</td><tr>";
          } 
          ?>
          </table>
        </form>


          

      
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