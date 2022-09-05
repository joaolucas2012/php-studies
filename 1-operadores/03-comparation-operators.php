<?php

$a = 20;
$b = 55;
$c = 55.0;

// comparar o tamanho
var_dump($a>$b);
echo "<br/>";
var_dump($a<$b);
echo "<br/>";
var_dump($a<=$b);
echo "<br/>";
var_dump($a>=$b);

// comparar o valor das variaveis
var_dump($b==$c); // se é igual
echo "<br/>";
var_dump($b!==$c); // se é diferente

echo "<br/>";

// comparar o valor e o tipo das variaveis
var_dump($b===$c); // se são iguais
echo "<br/>";
var_dump($b!==$c); // se são diferentes

?>