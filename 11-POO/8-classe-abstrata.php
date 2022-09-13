<?php

interface Veiculo {
  public function acelerar($velocidade);
  public function freiar($velocidade);
  public function trocarMarcha($marcha);
}

// Isso diz o que um automóvel precisa fazer, mas nenhuma instancia pode ser apenas
// um automovel, precisa ter um nome específico (Civic, Fusca, etc)
abstract class Automovel implements Veiculo {
  public function acelerar($velocidade){
    echo "<br/>O veículo acelerou até " . $velocidade . " km/h";
  }

  public function freiar($velocidade){
    echo "<br/>O veículo freiou até " . $velocidade . " km/h";
  }

  public function trocarMarcha($marcha){
    echo "<br/>O veículo engatou a marcha " . $marcha;
  }
}

// DelRey recebe as funções da classe abstrata automovel e mais a função empurrar
class DelRey extends Automovel {
  public function empurrar(){
    echo "<br/>Acabei de empurrar o DelRey";
  }
}

$carro = new DelRey();
$carro->acelerar(200);
$carro->empurrar();

?>