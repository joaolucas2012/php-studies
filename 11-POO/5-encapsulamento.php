<?php

class Pessoa {

  // Atributo público
  public $nome = "João Lucas";
  // Atributo protegido
  protected $idade = 48;
  // Atributo privado (mais protegido que o protected)
  private $senha = "123456";

  public function verDados(){
    echo $this->nome . "<br>";
    echo $this->idade . "<br>";
    echo $this->senha . "<br>";
  }
}

// Subclasse
class Programador extends Pessoa {
  public function getClass(){
    // get_class descobre de qual classe esse objeto foi instanciado
    echo get_class($this);
  }
}

$objeto = new Programador();

// echo $objeto->nome . "<br>";
$objeto->verDados();
echo "<br/>";
$objeto->getClass();

?>