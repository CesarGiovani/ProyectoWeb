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
    <form action="#" method="post">
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
          <label for="edad">Edad De Nacimiento</label>
        </div>
        <div class="col-75">
          <input type="text" id="dia" name="dia" placeholder="Ingrese Dia.." required>
        </div>
        <div class="col-75">
          <input type="text" id="mes" name="mes" placeholder="Ingrese Mes.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for=""></label>
        </div>
        <div class="col-75">
          <input type="text" id="anio" name="anio" placeholder="Ingrese Año.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Country</label>
        </div>
        <div class="col-75">
          <select id="country" name="country">
             <option value="australia">Australia</option>
             <option value="canada">Canada</option>
             <option value="usa">USA</option>
           </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</body>

</html>
