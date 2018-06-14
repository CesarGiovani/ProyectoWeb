<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/loader.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body onload="myFunction()" style="margin:0;">
  <div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
    <!--Aqui empiza lo demas -->
    <div class="header">
      <div class="imagenEdo">
        <table>
          <tr>
            <td>
              <img src="img/Escudo_Edo.png"  alt="">
            </td>
            <td>
              <a href="#default" class="logo">Reporte Jilotepequense</a>
            </td>
          </tr>
        </table>
      </div>

      <div class="header-right">
        <a class="active" href="#home">Iniciar Sesion</a>
        <a href="#contact">Busqueda De Folio</a>
        <a href="#about">About</a>
      </div>
    </div>






  <!--ella solo te ve -->

  <!--ella solo te ve como un gran amigo-->




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
