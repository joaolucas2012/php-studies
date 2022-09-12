<?php

class Endereco {

  private $logradouro;
  private $numero;
  private $cidade;

  // Método construtor para a classe Endereco
  public function __construct($logr, $num, $city) {
    $this->logradouro = $logr;
    $this->numero = $num;
    $this->cidade = $city;
  }

  // Método para destruir a instancia da classe Endereco
  public function __destruct(){
    var_dump("DESTRUIR");
  }

  // Método para converter um objeto em uma string
  public function __toString(){
    return  $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
  }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");
var_dump($meuEndereco);
echo "<br>";

// Para printar o objeto como string
echo $meuEndereco;
echo "<br>";

// Segunda maneira de destruir uma instancia de uma classe
unset($meuEndereco);

?>