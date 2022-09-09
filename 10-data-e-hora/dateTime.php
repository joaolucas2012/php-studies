<?php

$dt = new DateTime();

// adicionando um intervalo de 15 dias na variavel periodo
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s") . "<br/>";

// somando o valor da variavel periodo na variavel dt
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

?>