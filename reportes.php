<?php
session_start();
 ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/reportes.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reportes</title>
  </head>
  <body>
    <?php
      include("conexion.php");
      $query="SELECT denunciante.IdDenunciante AS ID, CONCAT(denunciante.Nombre,' ',denunciante.ApellidoPa,
' ',denunciante.ApellidoMa) AS Nombre, denunciante.sexo As Sexo,
denunciante.telefono As Telefono, denunciante.correo AS Correo,
denunciante.imagen AS Perfil FROM denunciante;";
      $ejectQuery= mysqli_query($coneta,$query);
      while ($rep=mysqli_fetch_assoc($ejectQuery)) {
        echo "<div class='container'>
          <img src=".$rep["Perfil"]." alt='Avatar' style='width:90px'>
          <p><span>".$rep["Nombre"].".</span><span>".$rep["Telefono"].".</span>
           <span>".$rep["Sexo"].".</span></p>
          <p>".$rep["Correo"]."</p>
          <a href='borraPuesto.php?IDDenuncia=".$rep['ID']."'>
          <span title='Ver Reporte'><img src='img/ver.ico'></span></a>
        </div>";
      }
      mysqli_close($coneta);
    ?>
      <!--
    <div class="container">
      <img src="img/mx.jpg" alt="Avatar" style="width:90px">
      <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
      <p>John Doe saved us from a web disaster.</p>
    </div>-->

  </body>

  </html>
