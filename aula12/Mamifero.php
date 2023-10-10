<?php
require_once "Animal.php";
class Mamifero extends Animal {
  private $corPelo;

  public function alimentar()
  {
    echo "<p>Mamando</p>";
  }

  public function emitirSom()
  {
    echo "<p>Som de Mamífero</p>";
  }

  public function locomover()
  {
    echo "<p>Correndo</p>";
  }

  

  /**
   * Get the value of corPelo
   */
  public function getCorPelo()
  {
    return $this->corPelo;
  }

  /**
   * Set the value of corPelo
   */
  public function setCorPelo($corPelo): self
  {
    $this->corPelo = $corPelo;

    return $this;
  }
}
