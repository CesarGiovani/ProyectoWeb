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
  <form method="post" action="InsertarDeparta.php">
    <div class="row">
      <div class="col-25">
        <label for="Puesto">Depatamento</label>
      </div>
      <div class="col-75">
        <input type="text" id="Depatamento" name="Depatamento" placeholder="Ingrese Departamento.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="aMat">Puesto</label>
      </div>
      <div class="col-75">
        <select class="" name="cmbpuesto" size="1">
            <option value="0"> -- Puesto -- </option>
            <?php
                include("conexion.php");
               $consulta = "SELECT usuario.IdUsuario, concat (usuario.Nombre,' ', usuario.ApellidoPa,' ', usuario.ApelidoMa) as nombre FROM usuario ";
               $ejectConsulta = mysqli_query($coneta,$consulta);
               while ($puesto=mysqli_fetch_assoc($ejectConsulta)) {
                 # code...
                 echo "<option value='".$puesto['IdUsuario']."'>".$puesto['nombre']."</option>";
               }
             ?>
          </select>
      </div>
    </div>
    <br>
    <input class="button button4" type="submit" value="Guardar">
    <input class="button button4" type="reset" value="Nuevo">
    <br><br>
</body>
<?php
  //funcion que permite la integracion de otro documento
  $query="SELECT * FROM departamento;";
  $ejectQuery= mysqli_query($coneta,$query);
   ?>
  <div style="overflow-x:auto;">
    <table class="table" border="1" id="customers">
      <tr>
        <th>No.Departamento</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Actualizar</th>
        <th>Borrar</th>
        <?php
       while ($pues=mysqli_fetch_assoc($ejectQuery)) {//el fetch assoc te manda un true si hay datos
         echo "<tr><td>".$pues["IdDepertamento"]."</td><td>".$pues["Descripcion"].
         "</td><td>".$pues["IdUsuario"]."</td><td><a href='actualizarDeparta.php?IdDepertamento=".$pues['IdDepertamento']."'>
         <span title='Editar'><img src='img/actualiza.ico'></span></td><td>
         <a href='borraDeparta.php?IdDepertamento=".$pues['IdDepertamento']."'>
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
