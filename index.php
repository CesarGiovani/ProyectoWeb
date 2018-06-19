<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/loader.css">
  <link rel="stylesheet" type="text/css" href="css/cuenta.css">
  <link rel="stylesheet" type="text/css" href="css/radio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
</head>

<body onload="myFunction()" style="margin:0;">
  <div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    <?php
    if ((@$_SESSION['Nombre']== NULL)) {
        if (@$_SESSION['Descripcion'] == NULL ) {
          ?>
    <!--Aqui empiza lo demas -->
    <div class="header">
      <a href="index.php" class="logo">Reporte Jilotepequense</a>
      <div class="header-right">
        <a class="active" href="login.php">Iniciar Sesion</a>
        <a href="#contact">Busqueda De Folio</a>
        <a href="#about">About</a>
      </div>
    </div>

    <form action="insetarDemandante.php" method="post">
      <div class="container">
        <h1>Registrar Denuncia</h1>
        <div class="row">
          <div class="col-25">
            <label for="subject">Denuncia</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Narre el motivo de su denuncia.." style="height:200px"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="aMat">Departamento</label>
          </div>
          <div class="col-75">
            <select class="" name="Departamento" size="1">
                <option value="0"> -- Departamento -- </option>
                <?php
                    include("conexion.php");
                   $consulta = "SELECT departamento.IdDepertamento, departamento.Descripcion FROM departamento;";
                   $ejectConsulta = mysqli_query($coneta,$consulta);
                   while ($puesto=mysqli_fetch_assoc($ejectConsulta)) {
                     # code...
                     echo "<option value='".$puesto['IdDepertamento']."'>".$puesto['Descripcion']."</option>";
                   }
                 ?>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="aMat">Ubicacion</label>
          </div>
          <div class="col-75">
            <select class="" name="Ubicacion" size="1">
                <option value="0"> -- Ubicacion -- </option>
                <?php
                    include("conexion.php");
                   $consulta = "SELECT ubicacion.IdUbicacion, ubicacion.Asenta from ubicacion";
                   $ejectConsulta = mysqli_query($coneta,$consulta);
                   while ($puesto=mysqli_fetch_assoc($ejectConsulta)) {
                     # code...
                     echo "<option value='".$puesto['IdUbicacion']."'>".$puesto['Asenta']."</option>";
                   }
                 ?>
              </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="Calle">Calle</label>
          </div>
          <div class="col-75">
            <input type="text" id="Calle" name="Calle" placeholder="Ingrese Calle(s).." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="Calle">Numero</label>
          </div>
          <div class="col-75">
            <input type="text" id="Numero" name="Numero" placeholder="Ingrese Numero(s).." required>
          </div>
        </div>


        <div class="row">
          <div class="col-25">
            <label for="nombre">Subir Evidencia:</label>
          </div>
          <div class="col-75">
            <input type="file" name="foto">
          </div>
        </div>

        <!--Es servidor público?-->

        <div class="row col-md-12">

          <h3>Datos del solicitante</h3>
          <hr class="red">
          <p>Sus datos personales se encuentran protegidos en términos de lo señalado por las leyes y demás disposiciones aplicables en materia de Transparencia y Protección de Datos Personales</p>

        </div>

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
            <input type="text" id="aMat" name="aMat" placeholder="Apellido Materno.." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="aMat">Edad</label>
          </div>
          <div class="col-75">
            <input id="Edad" type="number" name="Edad" placeholder="Edad" max="100" min="5" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="aMat">Sexo</label>
          </div>
          <div class="col-75">
            <label class="container2">
                  <input id="male" name="gender" checked="" value="Hombre" type="radio"> Hombre
                  <span class="checkmark"></span>
              </label>
            <label class="container2">
                  <input id="female" name="gender" value="Mujer" type="radio"> Mujer
                  <span class="checkmark"></span>
              </label>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="Telefono">Telefono</label>
          </div>
          <div class="col-75">
            <input type="text" id="Telefono" name="Telefono" placeholder="Telefono.." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="Correo">Correo</label>
          </div>
          <div class="col-75">
            <input type="text" id="Correo" name="Correo" placeholder="Correo.." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="nombre">Subir Foto Personal:</label>
          </div>
          <div class="col-75">
            <input id="fileUpload" name="fileUpload" file-upload="" multiple="" class="ng-scope" type="file">
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" value="Reportar">
        </div>
    </form>
    </div>
    <?php
  }
  }else {
  header("location:reportes.php");
  }
     ?>

    <!--Aqui termina el loader-->
  </div>
  <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
  </script>

</body>

</html>
