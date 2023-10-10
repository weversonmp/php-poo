<?php

abstract class Animal
{
  protected $peso;
  protected $idade;
  protected $membros;
  abstract public function locomover();
  abstract public function alimentar();
  abstract public function emitirSom();

  /**
   * Get the value of peso
   */
  public function getPeso()
  {
    return $this->peso;
  }

  /**
   * Set the value of peso
   */
  public function setPeso($peso)
  {
    $this->peso = $peso;

  }

  /**
   * Get the value of idade
   */
  public function getIdade()
  {
    return $this->idade;
  }

  /**
   * Set the value of idade
   */
  public function setIdade($idade)
  {
    $this->idade = $idade;

  }

  /**
   * Get the value of membros
   */
  public function getMembros()
  {
    return $this->membros;
  }

  /**
   * Set the value of membros
   */
  public function setMembros($membros)
  {
    $this->membros = $membros;

  }
}


