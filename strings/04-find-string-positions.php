<?php

$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";

// pega a posição da palavra dentro da string
$q = strpos($frase, $palavra);

// pega um pedaço do texto da string de acordo com os parâmetros enviados
$texto = substr($frase, 0, $q);
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);
var_dump($texto);
var_dump($texto2);


?>