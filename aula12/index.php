<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body><pre>
  <?php 
  require_once "Animal.php";
  require_once "Mamifero.php";
  require_once "Reptil.php";

  $a = new Mamifero;
  $a->setPeso(130);
  print_r($a);
  ?>
</body>
</html>