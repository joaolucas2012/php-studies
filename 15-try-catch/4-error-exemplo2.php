<?php

// Mostre todos os erros, mas negue se for do tipo notice
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>