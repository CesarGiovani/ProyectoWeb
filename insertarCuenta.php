<?php
  include("conexion.php");
  $nombre = $_POST["nombre"];
  $apePat = $_POST["aPat"];
  $apeMat = $_POST["aMat"];
  $telefono = $_POST["tel"];
  $idPuesto = $_POST["cmbpuesto"];
  $correo = $_POST["Correo"];
  $contra = $_POST["contra"];
 $query = "  INSERT  usuario  VALUES (NULL, '$nombre', '$apePat', '$apeMat', '$telefono', '$idPuesto', '$correo', '$contra')";
  mysqli_query($coneta,$query);
  header("location:login.php")//regresa a una pagina sin darle clic
 ?>
