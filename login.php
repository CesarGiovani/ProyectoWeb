<?php
@$user = base64_encode($_POST['email']);
@$pass = sha1($_POST['psw']);

if(isset($user) && isset($pass) && isset($tipo)){
	include("conexion.php");
	$sql = "SELECT * FROM usuario
	        WHERE User = '$user'
			AND Password = '$pass'";
	$ejecSQL = mysqli_query($coneta,$sql);
	while($extraer = mysqli_fetch_assoc($ejecSQL)){
		$extUser = $extraer['User'];
		$extPass = $extraer['Password'];
		$extCargo = $extraer['idCargo'];
		$extFoto = $extraer['foto'];
	}
	if(($user == $extUser) && ($pass == $extPass) && ($tipo == $extCargo)){
		session_start();
		$_SESSION["User"] = base64_decode($extUser);
		$_SESSION["foto"] = $extFoto;
		header("location:index.php");
	}else{
		echo "Datos incorrectos, intente de nuevo";
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
    <form action="#" method="post">
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
