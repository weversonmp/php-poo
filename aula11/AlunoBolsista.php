<?php 
  require_once "Aluno.php";

  class AlunoBolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa() {
      echo "<p>Bolsa Renovada</p>";
    }

    public function pagarMensalidade() { // Sobrepondo Aluno
      echo "<p>{$this->getNome()} é bolsista e paga com desconto</p>";
    }
    
    

    /**
     * Get the value of bolsa
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     */
    public function setBolsa($bolsa): self
    {
        $this->bolsa = $bolsa;

        return $this;
    }
  }
?>