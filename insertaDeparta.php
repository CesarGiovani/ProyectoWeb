<?php
  include("conexion.php");
  $nombre = $_POST["Depatamento"];
  $usuario = $_POST["cmbpuesto"];
 $query = "  INSERT  departamento  VALUES (NULL, '$nombre','$usuario')";
  mysqli_query($coneta,$query);
  header("location:crearDepartamento.php")//regresa a una pagina sin darle clic
 ?>
