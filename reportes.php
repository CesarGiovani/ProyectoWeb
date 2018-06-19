<?php
session_start();
 ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/reportes.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reportes</title>
  </head>

  <body>
    <?php
    $Cargo = $_SESSION['Descripcion'];
    if (isset($_SESSION['Nombre'])) {
        if ($_SESSION['Descripcion'] != NULL ) {
          ?>
          <div class="header">
            <a href="reportes.php" class="logo"><?php echo "$Cargo"; ?></a>
            <p>Bienvenido <?php echo $_SESSION['Nombre']; ?></p>
            <div class="header-right">
              <a class="activeC" href="cerrarSesion.php">Cerrar Sesion</a>
            </div>
          </div>
    <?php
      include("conexion.php");
      $query="SELECT reporte.IdReporte, CONCAT(denunciante.Nombre,' ',denunciante.ApellidoPa,
' ',denunciante.ApellidoMa) AS Nombre, denunciante.sexo As Sexo,
denunciante.telefono As Telefono, denunciante.correo AS Correo,
denunciante.imagen AS Perfil, departamento.Descripcion FROM reporte
INNER JOIN denunciante ON reporte.IdDenunciante = denunciante.IdDenunciante
INNER JOIN departamento ON reporte.IdDepartamento = departamento.IdDepertamento
WHERE departamento.Descripcion = '".$Cargo."' AND reporte.`status` = 1";
      $ejectQuery= mysqli_query($coneta,$query);
      while ($rep=mysqli_fetch_assoc($ejectQuery)) {
        echo "<div class='container'>
          <img src=".$rep["Perfil"]." alt='Avatar' style='width:90px'>
          <p><span>".$rep["Nombre"].".</span><span>".$rep["Telefono"].".</span>
           <span>".$rep["Sexo"].".</span></p>
          <p>".$rep["Correo"]."</p>
          <a href='reporteDenuncias.php?IdReporte=".$rep['IdReporte']."'>
          <span title='Ver Reporte'><img src='img/ver.ico'></span></a>
        </div>";
      }
      mysqli_close($coneta);
    }
  }else {
    echo "Acceso denegado >:v, <a href='login.php'>Iniciar Sesion</a>";
}
    ?>
  </body>

  </html>
