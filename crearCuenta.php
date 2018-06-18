<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/cuenta.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <div class="container">
    <form action="insertarCuenta.php" method="post">
      <div class="row">
        <div class="col-25">
          <label for="nombre">Nombre(s)</label>
        </div>
        <div class="col-75">
          <input type="text" id="nombre" name="nombre" placeholder="Ingrese Nombre(s).." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="aPat">Apellido Paterno</label>
        </div>
        <div class="col-75">
          <input type="text" id="aPat" name="aPat" placeholder="Ingrese Apellido Paterno.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="aMat">Apellido Materno</label>
        </div>
        <div class="col-75">
          <input type="text" id="aMat" name="aMat" placeholder="Ingrese Apellido Materno.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="tel">Telefono</label>
        </div>
        <div class="col-75">
          <input type="text" id="tel" name="tel" placeholder="Ingrese Telefono.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="puesto">Puesto</label>
        </div>
        <div class="col-75">
          <select class="" name="cmbpuesto" size="1">
            <option value="0"> -- Puesto -- </option>
            <?php
                include("conexion.php");
               $consulta = "SELECT * FROM puesto";
               $ejectConsulta = mysqli_query($coneta,$consulta);
               while ($puesto=mysqli_fetch_assoc($ejectConsulta)) {
                 # code...
                 echo "<option value='".$puesto['IdPuesto']."'>".$puesto['Descripcion']."</option>";
               }
             ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="correo">Correo</label>
        </div>
        <div class="col-75">
          <input type="text" id="Correo" name="Correo" placeholder="Ingrese correo.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="contra">Contraseña</label>
        </div>
        <div class="col-75">
          <input type="password" id="contra" name="contra" placeholder="Contraseña.." required>
        </div>
      </div>
      <br>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>

</html>
