<?php

class Animal {

  public $nome;

  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function falar(){
    return "Som";
  }

  public function mover(){
    return "Anda";
  }
}

// Polimorfismo muda o comportamento de um método herdado
class Cachorro extends Animal {
  public function falar(){
    return "Late";
  }
}

$pluto = new Cachorro();
$pluto->setNome("Pluto");
echo $pluto->getNome() . "<br/>";
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "----------------------------------------------------------------<br/>";

class Gato extends Animal {
  public function falar(){
    return "Mia";
  }
}

$garfield = new Gato();
$garfield->setNome("Garfield");
echo $garfield->getNome() . "<br/>";
echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "----------------------------------------------------------------<br/>";

class Passaro extends Animal {
  public function falar(){
    return "Canta";
  }

  public function mover(){
    // parent::mover() chama o método mover da classe pai
    return "Voa e " . parent::mover();
  }
}

$tucano = new Passaro();
$tucano->setNome("Tucano");
echo $tucano->getNome() . "<br/>";
echo $tucano->falar() . "<br/>";
echo $tucano->mover() . "<br/>";

?>