<?php

// A interface obriga a criação de classes seguindo o padrão exigido
// Essa interface obriga a criação dessas 3 funções específicas para uma classe Veiculo
interface Veiculo {
  public function acelerar($velocidade);
  public function freiar($velocidade);
  public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
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

$carro = new Civic();
$carro->trocarMarcha(1);
$carro->freiar(10);
$carro->acelerar(100);
?>