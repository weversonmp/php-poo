<?php 

require_once 'Controlador.php';
class ControleRemoto implements Controlador {
  private $volume;
  private $ligado;
  private $tocando;

  

  public function __construct()
  {
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
  }

  



  /**
   * Get the value of volume
   */
  private function getVolume()
  {
    return $this->volume;
  }

  /**
   * Set the value of volume
   */
  private function setVolume($volume): self
  {
    $this->volume = $volume;

    return $this;
  }

  /**
   * Get the value of ligado
   */
  private function getLigado()
  {
    return $this->ligado;
  }

  /**
   * Set the value of ligado
   */
  private function setLigado($ligado)
  {
    $this->ligado = $ligado;

  }

  /**
   * Get the value of tocando
   */
  private function getTocando()
  {
    return $this->tocando;
  }

  /**
   * Set the value of tocando
   */
  private function setTocando($tocando): self
  {
    $this->tocando = $tocando;

    return $this;
  }

  public function ligar() {
    $this->setLigado(true);

  }
  public function desligar() {
    $this->setLigado(false);

  }
  public function abrirMenu() {
    echo "<br>Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
    echo "<br>Está Tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
    echo "<br>Volume:  " . $this->getVolume();
    for ($i=10; $i <= $this->getVolume(); $i += 10) { 
      echo "|";
    }
  }
  public function fecharMenu() {
    echo "<br>Fechando Menu...";
  }
  public function maisVolume() {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume() + 10);
    }
  }

  public function menosVolume() {
    if ($this->getLigado()) {
      $this->setVolume($this->getVolume() - 10);
    }
  }

  public function ligarMudo() {
    if ($this->getLigado() && $this->getVolume() > 0) {
      $this->setVolume(0);
    }
  }

  public function desligarMudo() {
    if ($this->getLigado() && $this->getVolume() == 0) {
      $this->setVolume(50);
    }
  }
  public function play() {
    if ($this->getLigado() && !$this->getTocando()) {
      $this->setTocando(true);
      echo "Tocando...";
    }
  }
  public function pause() {
    if ($this->getLigado() && $this->getTocando()) {
      $this->setTocando(false);
      echo "Pausando...";
    }
  }
}
