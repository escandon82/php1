<!DOCTYPE html>
<html>
<head>
  <title>Renta de veh�culos</title>
</head>
<body>
  <h1>Renta de veh�culos</h1>

  <form action="renta.php" method="post">
    <label for="vehiculo">Selecciona un veh�culo:</label>
    <select name="vehiculo">
      <option value="sedan">Sed�n</option>
      <option value="suv">SUV</option>
      <option value="camioneta">Camioneta</option>
    </select>

    <label for="dias">N�mero de d�as:</label>
    <input type="number" name="dias" min="1">

    <input type="submit" value="Calcular precio">
  </form>

  <?php
  if (isset($_POST['vehiculo']) && isset($_POST['dias'])) {
    $vehiculo = $_POST['vehiculo'];
    $dias = $_POST['dias'];

    $precios = array(
      'sedan' => 50,
      'suv' => 70,
      'camioneta' => 90
    );

    $precio = $precios[$vehiculo] * $dias;

    echo "<p>El precio total es $ $precio.</p>";
  }
  ?>

</body>
</html>
