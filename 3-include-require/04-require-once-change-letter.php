<?php

// inclui um arquivo apenas uma vez. Se ele já foi incluído antes, não inclui mais
include_once "./require-once/functions.php";
include_once "./require-once/functions.php";

$frase = "Eu quero acaí";
$resultado = changeLetter("c", "ç", $frase);
echo $resultado;

?>