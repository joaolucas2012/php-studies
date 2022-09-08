<?php

// Exemplo 1
function teste($callback){

  // Processo lento

  $callback();

}

// Teste 1
teste(function(){
  echo "Terminou!<br/>";
});

//////////////////////////////////////////////////////////////////////

// Exemplo 2
$fn = function($a){
  var_dump($a);
};

// Teste 2
$fn("Oi");

?>