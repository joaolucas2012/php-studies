<?php

// definição de funções
// função que retorna uma frase
function ola(){
  return "Hello world!";
}

// função que retorna um salário
function salario(){
  return 946.00;
}

// chamada de funções
echo ola();
$frase = ola();
echo "<hr/>Numero de caracteres na string: " . strlen($frase);
//////////////////////////////////////////////////////////////
echo "<hr/>José recebeu 3 salários: ".(salario()*3);

?>