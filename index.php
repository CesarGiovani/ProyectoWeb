<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/loader.css">
  <link rel="stylesheet" type="text/css" href="css/cuenta.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body onload="myFunction()" style="margin:0;">
  <div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    <!--Aqui empiza lo demas -->
    <div class="header">
      <a href="#default" class="logo">Reporte Jilotepequense</a>
      <div class="header-right">
        <a class="active" href="#home">Iniciar Sesion</a>
        <a href="#contact">Busqueda De Folio</a>
        <a href="#about">About</a>
      </div>
    </div>



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
          <label for="aMat">Denunciante </label>
        </div>
        <div class="col-75">
          <select class="" name="denunciante" size="1">
                <option value="0"> -- Denunciante -- </option>
                <?php
                    include("conexion.php");
                   $consulta = "SELECT denunciante.IdDenunciante, concat (denunciante.Nombre,' ', denunciante.ApellidoPa,' ', denunciante.ApellidoMa) as nombre FROM denunciante ";
                   $ejectConsulta = mysqli_query($coneta,$consulta);
                   while ($puesto=mysqli_fetch_assoc($ejectConsulta)) {
                     # code...
                     echo "<option value='".$puesto['IdDenunciante']."'>".$puesto['nombre']."</option>";
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
          <label for="nombre">Subir archivo:</label>
        </div>
        <div class="col-75">
          <input id="fileUpload_input" name="fileUpload_input" file-upload="" multiple="" class="ng-scope" type="file">
        </div>
      </div>

      <!--Es servidor público?-->

      <div class="row col-md-12">

        <h3>Datos del solicitante</h3>
        <hr class="red">
        <p>Sus datos personales se encuentran protegidos en términos de lo señalado por las leyes y demás
                                disposiciones aplicables en materia de Transparencia y Protección de Datos Personales</p>

      </div>
      <form action="#" method="post">
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
            <input id="Edad" type="number" name="Edad" placeholder="Edad" max="800" min="5" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="aMat">Sexo</label>
          </div>
          <div class="col-75">
            <label class="radio-inline">
                  <input id="male" name="gender" ng-model="pet.ciudadano.genero" value="HOMBRE" class="ng-pristine ng-untouched ng-valid ng-empty" type="radio"> Hombre
              </label>
            <label class="radio-inline">
                  <input id="female" name="gender" ng-model="pet.ciudadano.genero" value="MUJER" class="ng-pristine ng-untouched ng-valid ng-empty" type="radio"> Mujer
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
            <label for="nombre">Subir archivo:</label>
          </div>
          <div class="col-75">
            <input id="fileUpload_input" name="fileUpload_input" file-upload="" multiple="" class="ng-scope" type="file">
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>


    <!--Aqui termina el loader-->
  </div>
  <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
  </script>

</body>

</html>
