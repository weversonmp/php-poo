<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP POO</title>
</head>
<body><pre>
  <?php 
    require_once 'Caneta.php';

    $c1 = new Caneta;
    $c1->modelo = "Bic Cristal";
    $c1->cor = "Azul";
    // $c1->carga = "teste";
    print_r($c1);
  ?>
</body>
</html>