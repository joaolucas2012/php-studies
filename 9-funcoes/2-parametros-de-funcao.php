<?php

// função recebendo um parâmetro
function what($texto){
  return "What is $texto?<hr/>";
}

// função recebendo 2 parâmetros
// se um parâmetro não tiver valor dafult, coloque ele a esquerda
function hey($txt2, $txt1="Hey"){
  return "$txt1, $txt2";
}

// função que retorna seus argumentos
function ola(){
  $argumentos = func_get_args();
  return $argumentos;
}

/////////////////////////////////////////////////////////////////////

// chamando a função passando o parâmetro
echo what("happening");
echo what("up");

// chamando a função passando 2 parâmetros
echo hey("João!");
echo hey("João!", " Olá") . "<hr />";

// chamando a função ola
echo "<hr/>".var_dump(ola("Bom dia", 45, false));


?>