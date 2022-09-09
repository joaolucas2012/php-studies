<?php

// Criação da classe pessoa
class Pessoa {
  public $nome;
  public function falar(){
    return "O meu nome é " . $this->nome;
  }
}

// instanciando um objeto da classe pessoa
$joao = new Pessoa();
$joao->nome = "João Lucas";
echo $joao->falar();

?>