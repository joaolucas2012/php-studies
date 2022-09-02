<?php

$nome = "joão lucas ribeiro";
echo $nome . '<br/>';

// deixa o testo em caixa alta
$nome = strtoupper($nome);
echo $nome . '<br/>';

// deixa o texto em caixa baixa
$nome = strtolower($nome);
echo $nome . '<br/>';

// deixa a primeira inicial do texto em caixa alta
echo ucfirst($nome) . '<br/>';

// deixa as primeiras iniciais do texto em caixa alta
$nome = ucwords($nome);
echo $nome . '<br/>';

?>