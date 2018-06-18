<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/cuenta.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <form method="post" action="InsertarPuesto.php">
    <div class="row">
      <div class="col-25">
        <label for="Puesto">Puesto</label>
      </div>
      <div class="col-75">
        <input type="text" id="Puesto" name="Puesto" placeholder="Ingrese Puesto.." required>
      </div>
    </div>
    <input class="button button4" type="submit" value="Guardar">
    <input class="button button4" type="reset" value="Nuevo">
    <br><br>
</body>
<?php
  include("conexion.php");//funcion que permite la integracion de otro documento
  $query="SELECT * FROM puesto;";
  $ejectQuery= mysqli_query($coneta,$query);
   ?>
  <div style="overflow-x:auto;">
    <table class="table" border="1" id="customers">
      <tr>
        <th>No.Puesto</th>
        <th>Puesto</th>
        <th>Actualizar</th>
        <th>Borrar</th>
        <?php
       while ($pues=mysqli_fetch_assoc($ejectQuery)) {//el fetch assoc te manda un true si hay datos
         echo "<tr><td>".$pues["IdPuesto"]."</td><td>".$pues["Descripcion"].
         "</td><td><a href='actualizarPuesto.php?IdPuesto=".$pues['IdPuesto']."'>
         <span title='Editar'><img src='img/actualiza.ico'></span></td><td>
         <a href='borraPuesto.php?IdPuesto=".$pues['IdPuesto']."'>
         <span title='Editar'><img src='img/borra.ico'></span></td></tr>";
       }
       mysqli_close($coneta);
        ?>
      </tr>
    </table>
  </div>
  </form>

  </body>

</html>
