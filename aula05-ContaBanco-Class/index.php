<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abrir Conta</title>
</head>
<body><pre>
  <?php
    require_once "ContaBanco.php";

    $weverson = new ContaBanco("Weverson", "cp");
    echo $weverson->abrirConta();
    echo $weverson->setSaldo(1000);
    echo $weverson->setStatus('aberto');
    

    
  ?>
</body>
</html>