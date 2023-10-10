<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body><pre>
  <?php 
  require_once "Aluno.php";
  // require_once "Visitante.php";
  // $v1 = new Visitante;
  // print_r($v1->setNome("Juvenilson"));
  $a1 = new Aluno;
  $a1->setNome("Pedro");
  $a1->setMatricula(1111);
  $a1->setIdade(16);
  $a1->setSexo("M");
  $a1->setCurso("Informatica");
  $a1->pagarMensalidade();
  print_r($a1);
  ?>
</body>
</html>