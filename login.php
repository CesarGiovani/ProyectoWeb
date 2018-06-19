<?php
@$corr = base64_encode($_POST['email']);
@$pass = sha1($_POST['psw']);

if(isset($corr) && isset($pass)){
	include("conexion.php");
	$sql = "SELECT U.Nombre, U.correo, U.contrasena, D.Descripcion FROM
usuario AS U JOIN departamento AS D ON U.IdUsuario = D.IdUsuario WHERE correo = '$corr' AND U.contrasena = '$pass'";
	$ejecSQL = mysqli_query($coneta,$sql);
	while($extraer = mysqli_fetch_assoc($ejecSQL)){
		$extName = $extraer['Nombre'];
		$extCorr = $extraer['correo'];
		$extPass = $extraer['contrasena'];
		$extDep = $extraer['Descripcion'];
	}
	if(($corr == @$extCorr) && ($pass == @$extPass)){
		session_start();
		$_SESSION['Nombre'] = $extName;
		$_SESSION['Descripcion'] = $extDep;
		header("location:reportes.php");
	}else{
		echo "<h1>Datos incorrectos, intente de nuevo</h1>";
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
</head>

<body>
  <div class="bg-img">
    <form action="login.php" method="post">
      <div class="container">
        <h1>Iniciar Sesion</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Ingrese Email" name="email" required>
        <label for="psw"><b>Contraseña</b></label>
        <input type="password" placeholder="Ingrese Contraseña" name="psw" required>
        <button type="submit" class="btn">Iniciar</button>
        <p>¿No tiene una cuenta? <a href="crearCuenta.php" style="color:dodgerblue">Crear una</a>.</p>
      </div>
    </form>
  </div>
</body>

</html>
