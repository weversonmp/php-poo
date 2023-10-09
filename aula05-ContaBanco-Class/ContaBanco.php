<?php
class ContaBanco
{

  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function __construct($dono, $tipo)
  {
    /**
     * status = false
     * saldo = 0
     */
    $this->dono = $dono;
    $this->tipo = $tipo;
    $this->status = "fechado";
    $this->saldo = 0;
  }

  public function abrirConta()
  {
    /** 
     * status -> verdadeiro
     * cc -> 50
     * cp -> 150
     */
    if ($this->status == "aberto") {
      echo "<p>A conta já está aberta.</p>";
      return;
    } else {

      if ($this->tipo == "cc") {
        $this->saldo += 50;
      } elseif ($this->tipo == "cp") {
        $this->saldo += 150;
      } else {
        return "Tipo de conta inválida!!!";
      }

      $this->status = "aberto";
      $this->numConta = random_int(100000, 999999);

      echo "Conta aberta<br>";
      echo "Você recebeu o valor de R$ " . number_format($this->saldo, 2, ",", ".") . " por ter aberto uma conta do tipo " . $this->tipo . "<br>";
      echo "
      Seus dados:
      Dono da conta: {$this->dono}
      Número da Conta: {$this->numConta}
      Tipo da conta: {$this->tipo}
      ";
    }
  }

  public function fecharConta()
  {
    /** 
     * n pode ter dinheiro
     * n pode ter divida
     */
    if ($this->saldo == 0) {
      $this->status = "fechado";
      echo "<h2>Sua conta foi encerrada com sucesso!</h2>";
    } else {
      echo "<p>Sua conta precisa estar vazia e suas pendências, quitadas!</p>";
    }
  }

  public function depositar($valor)
  {
    /** 
     * tem q estar aberta
     * 
     */
    if ($this->status == "aberto") {
      $this->saldo += $valor;
      echo '<h3 style="color:green;">Saldo adicionado com sucesso</h3>';
      echo "O valor de R$ " . number_format($valor, 2, ",", ".") . " Foi adicionado a sua conta";
      echo "<br>Seu novo saldo é: R$ " . number_format($this->saldo, 2, ",", ".");
    } else {
      echo '<h3 style="color:red;">ERRO!!! Sua conta não está aberta.</h3>';
    }
  }

  public function sacar($valor)
  {
    /**
     * tem q estar aberta
     * tem q ter saldo
     */
    if ($this->status == 'aberto' && $this->saldo > 0) {
      echo "<p>Você solicitou o valor de R$ " . number_format($valor, 2, ",", ".") . "</p>";

      if ($valor > $this->saldo) {
        echo '<h3 style="color:red;">ERRO!!! Você não tem saldo suficiente.</h3>';
      } else {
        $this->saldo -= $valor;
        echo "O valor de R$ " . number_format($valor, 2, ",", ".") . " foi debitado da sua conta";
        echo "<br>Seu saldo atual é R$ " . number_format($this->saldo, 2, ",", ".");
      }
    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa ou ainda n foi aberta!!!</h3>';
    }
  }

  public function pagarMensal()
  {
    /**
     * chamar tira saldo
     * cc - 12 reais
     * cp - 20 reais
     */
    if ($this->status == "aberto") {

      switch ($this->tipo) {
        case 'cc':
          $this->saldo -= 12;
          echo "<br><br>Sua mensalidade no valor de R$ 12,00 foi debitada";
          echo "<br>Seu saldo atual é: R$ " . number_format($this->saldo, 2, ",", ".");
          break;

        case 'cp':
          $this->saldo -= 20;
          echo "<br><br>Sua mensalidade no valor de R$ 20,00 foi debitada";
          echo "<br>Seu saldo atual é: R$ " . number_format($this->saldo, 2, ",", ".");
          break;

        default:
          echo "Houve uma falha ao tentar debitar sua mensalidade!";
          echo "Há algo errado com seu tipo de conta, ajuste essa pendência!";
          break;
      }
    }
  }


  public function getNumConta()
  {
    if ($this->status == "aberto") {
      return "<p>Número da Conta: <strong>$this->numConta</strong></p>";
    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa ou ainda n foi aberta!!!</h3>';
    }
  }


  public function setNumConta($newNumConta)
  {
    if ($this->status == "aberto") {
      $this->numConta = $newNumConta;
      return "<p>Novo Número da Conta: <strong>$this->numConta</strong></p>";

    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa ou ainda n foi aberta!!!</h3>';
    }
  }


  public function getTipo()
  {
    if ($this->status == "aberto") {
      return "<br>O tipo da sua conta é: " . $this->tipo;
    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa ou ainda n foi aberta!!!</h3>';
    }
  }


  public function setTipo($tipo)
  {
    if ($this->status == "aberto") {
      if ($this->tipo == $tipo) {
        return "<p>A sua conta já é do tipo: $tipo</p>";
      }elseif ($tipo === "cc" || $tipo === "cp") {
        $this->tipo = $tipo;
        echo "<p>O tipo da sua conta foi alterada para: {$this->tipo}</p>";
      } else {
       echo '<h3 style="color:red">ERRO! Tipo de conta inválida!!!</h3>';
      }
    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa!!!</h3>';
    }
    


  }


  public function getDono()
  {
    if ($this->status == "aberto") {
      return "<p>O dono da conta é: {$this->dono}</p>";

    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa!!!</h3>';
    }
  }


  public function setDono($dono)
  {
    if ($this->status == "aberto") {
      $this->dono = $dono;
      return "<p>'{$this->dono}' Foi adicionado como o novo dono da conta</p>";
    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa!!!</h3>';
    }
  }


  public function getSaldo()
  {
    if ($this->status == "aberto") {
      return "<br>Seu saldo é de: R$ " . number_format($this->saldo, 2, ",", ".");

    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa!!!</h3>';
    }
  }


  public function setSaldo($saldo)
  {
    if ($this->status == "aberto") {
      $this->saldo = $saldo;
      return "<br>Seu saldo agora é de: R$ " . number_format($this->saldo, 2, ",", ".");

    } else {
      echo '<h3 style="color:red">ERRO! A sua conta pode estar inativa!!!</h3>';
    }
  }


  public function getStatus()
  {
    return "<p>O status da sua conta é: <strong>$this->status</strong></p>";
  }


  public function setStatus($status)
  {
    if ($this->status != $status && ($status == "aberto" || $status == "fechado")) {
      $this->status = $status;
    return "<p>O status da sua conta agora é: <strong>$this->status</strong></p>";
    } else {
      echo '<h3 style="color:red">ERRO! Status Inválido ou Status já é ' . $status . '!!!</h3>';
    }
    $this->status = $status;

  }
}
