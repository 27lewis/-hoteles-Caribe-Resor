<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/logo.ico">
  <title>Hoteles Caribe Resort</title>
  <link rel="stylesheet" href="Style.css">
</head>

<body>
  <div id="container">
    <header>
      <h1>
        Hoteles Caribe Resort
      </h1>

      <h3>
        Reservar hotel
      </h3>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
          <legend>
            Llenar formulario
          </legend>

          <b>Nombres:</b><br>
          <input type="text" name="Nombres"><br>

          <b>Apellidos:</b><br>
          <input type="text" name="Apellidos"><br>

          <b>Cédula:</b><br>
          <input type="text" name="cedula">
          <br><br>

          <b>Sucursales:</b><br><br>
          <input type="radio" name="Sucursales" value="Cartagena">Cartagena
          <input type="radio" name="Sucursales" value="Barranquilla">Barranquilla
          <input type="radio" name="Sucursales" value="Santa Marta">Santa Marta<br>
          <br>

          <b>Edad:</b>
          <input type="number" name="edad" min="18" max="100">
          <br><br>

          <b>Tipo de habitación:</b>
          <select name="Tipo_habitación" id="select">
            <option value=""></option>
            <option value="Sencilla">Sencilla (1 sola cama): $ 80.000 pesos por noche</option>
            <option value="Doble">Doble (1 cama doble): $100.000 pesos por noche.</option>
            <option value="Doble sencilla">Doble sencilla (2 camas sencillas): $ 100.000 pesos por noche.</option>
            <option value="Múltiple">Múltiple (con 3 o 4 camas sencillas): $120.000 pesos por noche.</option>
          </select>
          <br><br>

          <b>Fecha de llegada:</b><br>
          <input type="date" name="Fecha">
          <br><br>

          <b>Cantidad de días:</b>
          <input type="number" name="dias" min="1" max="30">
          <br><br>

          <b>Adicional:</b><br>
          <p>Manera adicional la cadena de hoteles ofrece el servicio de desayuno.</p>
          <select name="Adicional" id="select">
            <option value=""></option>
            <option value="incluye">Incluye un costo de 8.000 pesos por día y por persona</option>
            <option value="noincluye">No incluir</option>
          </select>
          <br><br>

          <input type="submit" value="Registrar">

        </fieldset>
      </form>

      <br><br>
      <?php

      if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $Tipo_habitación = $_POST['Tipo_habitación'];
        $dias =$_POST['dias'];

        
        if($Tipo_habitación == "Sencilla"){
            $total = 80000 * $dias;
            
        }
        if($Tipo_habitación == "Doble"){
            $total = 100000 * $dias;
            
        }
        if($Tipo_habitación == "Doble sencilla"){
            $total = 100000 * $dias;
            
        }
        if($Tipo_habitación == "Múltiple"){
            $total = 120000 * $dias;
            
        }

        if(isset($_POST['Adicional'])){
            $total+= 8000 * $dias;
        }
        echo "El costo de su estadia es de :$ ".$total;
      }
      ?>
    </header>
  </div>
</body>
</html>
