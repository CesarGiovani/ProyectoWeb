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
    <form action="crearCuenta.php" method="post">
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
            <option value="0">-- Puesto --</option>
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
        <input type="submit" value="Crear">
      </div>
    </form>
    <?php
    @$nombre = $_POST["nombre"];
    @$apePat = $_POST["aPat"];
    @$apeMat = $_POST["aMat"];
    @$telefono = $_POST["tel"];
    @$idPuesto = $_POST["cmbpuesto"];
    @$correo = base64_encode($_POST["Correo"]);
    //@$encripUsuario = base64_encode($usuario);
    @$contra = sha1($_POST["contra"]);
    //@$encripContra = md5($contra);
    if(isset($nombre) && isset($contra)){
    	if($idPuesto == 0 ){
    		echo "<h1>Olvido Seleccionar El Puesto</h1>";
    	}elseif($contra == NULL){
    		echo "El campo contraseña no debe estar vacio";
    	}else
    	{
    	include('conexion.php');
        //echo $rutaArch;
    		$sql = "INSERT  usuario  VALUES
        (NULL, '$nombre', '$apePat', '$apeMat', '$telefono',
          '$idPuesto', '$correo', '$contra')";
    		if(mysqli_query($coneta,$sql)){
    			echo "Usuario Registrado correctamente <br>";
          echo " <a type='button' name='button' href='login.php' style='color:dodgerblue'
          >Regresar
          <span title='Ver Reporte'><img src='img/back.ico'></span></a>";
    			//mueve el archivo a la ruta de imagenes/imgUsuario
    		}else{
    			echo "Problemas al Registrar";
    		}
    		mysqli_close($coneta);
    	}
    }
    ?>
  </div>
</body>

</html>
