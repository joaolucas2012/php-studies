<?php

require_once("config.php");

// usa o namespace Cliente e sua classe chamada Cadastro
use Cliente\Cadastro;

// Essa instancia usa a classe Cadastro que está na namespace Cliente
$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;

?>