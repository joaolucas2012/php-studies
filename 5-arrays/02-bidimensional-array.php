<?php

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

for($i = 0; $i < 2; $i++) {
  for($j = 0; $j < 4; $j++) {
    echo "Posição: [$i][$j] - " . $carros[$i][$j] . '<br/>';
  }
}

?>