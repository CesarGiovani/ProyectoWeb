<?php
  include("conexion.php");
  $nombre = $_POST["Puesto"];
 $query = "  INSERT  puesto  VALUES (NULL, '$nombre')";
  mysqli_query($coneta,$query);
  header("location:crearPuesto.php")//regresa a una pagina sin darle clic
 ?>
