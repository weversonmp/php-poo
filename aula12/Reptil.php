<?php
require_once "Animal.php";
class Reptil extends Animal
{
  private $corEscama;

  public function locomover()
  {
    echo "<p></p>";
  }
  public function alimentar()
  {
    echo "<p></p>";
  }
  public function emitirSom()
  {
    echo "<p></p>";
  }

  

  /**
   * Get the value of corEscama
   */
  public function getCorEscama()
  {
    return $this->corEscama;
  }

  /**
   * Set the value of corEscama
   */
  public function setCorEscama($corEscama): self
  {
    $this->corEscama = $corEscama;

    return $this;
  }
}
