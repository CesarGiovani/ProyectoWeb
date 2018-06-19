<?php
  include("conexion.php");
  //Ruta donde se almacenar� la foto

  $nombre = $_POST["nombre"];
  $apePat = $_POST["aPat"];
  $apeMat = $_POST["aMat"];
  $edad= $_POST["Edad"];
  $sexo = $_POST["gender"];
  $telefono = $_POST["Telefono"];
  $correo = $_POST["Correo"];

  $ruta = "img/perfil";
	//extraemos la imagen o foto en archivo
	$archivo = $_FILES['foto']["tmp_name"];
	//extraer el nombre del archivo
	$nombreArchivo = $_FILES['foto']["name"];

	$rutaArch = $ruta . "/" . $nombreArchivo;
  //$archi = $_POST["fileUpload"];
 $query = "INSERT denunciante values (NULL,'$nombre','$apePat','$apeMat','$edad','$sexo','$telefono','$correo','$rutaArch');";
  mysqli_query($coneta,$query);
    //mueve el archivo a la ruta de imagenes/imgUsuario
    move_uploaded_file($archivo,$rutaArch);
  $ruta2 = "img/repo";
	//extraemos la imagen o foto en archivo
	$archivo2 = $_FILES["fileUpload"]["tmp_name"];
	//extraer el nombre del archivo
	$nombreArchivo2 = $_FILES["fileUpload"]["name"];

	$rutaArch2 = $ruta2 . "/" . $nombreArchivo2;

  $Denun = $_POST["subject"];
  $Depa = $_POST["Departamento"];
  $Ubicacion= $_POST["Ubicacion"];
  $calle = $_POST["Calle"];
  $numero = $_POST["Numero"];
 $query2 = "INSERT reporte VALUES (NULL,NOW(),'$Depa',(select MAX(denunciante.IdDenunciante) from denunciante),'$Ubicacion','$Denun','$rutaArch2','$calle','$numero',1)";

  if (mysqli_query($coneta,$query2)) {
    echo "Reporte Registrado correctamente";
    //mueve el archivo a la ruta de imagenes/imgUsuario
    move_uploaded_file($archivo2,$rutaArch2);
  }else {
  echo "Reporte No Registrado correctamente";
  }
  mysqli_close($coneta);
 ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <h1>Gracias por su reporte</h1>
  </body>

  </html>
