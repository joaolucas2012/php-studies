<?php

// inclui o arquivo de funções no código
// executa o código do arquivo mesmo se tiver erros
include "inc/01-include-functions.php";
$str1 = "Eu quero ";
$str2 = "ganhar mais dinheiro!";

$resultado = concatenar($str1, $str2);
echo $resultado;

?>