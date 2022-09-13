<?php

interface Veiculo {
  public function acelerar($velocidade);
  public function freiar($velocidade);
  public function trocarMarcha($marcha);
}

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

?>