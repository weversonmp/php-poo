<?php 
class Caneta {
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampada;

  public function rabiscar() {
    if ($this->tampada == true) {
      echo "ERRO! Não posso RABISCAR!";
  } else {
    echo "<br>Estou Rabiscando...";
  }
  }

  private function tampar() {
    $this->tampada = true;
  }

  private function destampar() {
    $this->tampada = false;
  }
}
?>