<?php 
abstract class Pessoa {
  private $nome;
  private $idade;
  private $sexo;

  public final function fazerAniversario() {
    $this->idade ++;
  }
  

  /**
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   */
  public function setNome($nome): self
  {
    $this->nome = $nome;

    return $this;
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
  public function setIdade($idade): self
  {
    $this->idade = $idade;

    return $this;
  }

  /**
   * Get the value of sexo
   */
  public function getSexo()
  {
    return $this->sexo;
  }

  /**
   * Set the value of sexo
   */
  public function setSexo($sexo): self
  {
    $this->sexo = $sexo;

    return $this;
  }
}
?>