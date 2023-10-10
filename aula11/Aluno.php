<?php 
require_once "Pessoa.php";

class Aluno extends Pessoa{
  private $matricula;
  private $curso;
  public function pagarMensalidade() {
    echo "Pagando mensalidade do aluno {$this->getNome()}";
  }

  

  /**
   * Get the value of matricula
   */
  public function getMatricula()
  {
    return $this->matricula;
  }

  /**
   * Set the value of matricula
   */
  public function setMatricula($matricula): self
  {
    $this->matricula = $matricula;

    return $this;
  }

  /**
   * Get the value of curso
   */
  public function getCurso()
  {
    return $this->curso;
  }

  /**
   * Set the value of curso
   */
  public function setCurso($curso): self
  {
    $this->curso = $curso;

    return $this;
  }
}
?>