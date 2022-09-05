<?php

// exemplo de definição de constante 1
// define("SERVIDOR", "127.0.0.1");
// echo SERVIDOR;

// exemplo de definição de constante 2
define("BANCO_DE_DADOS",[
  '127.0.0.1',
  'root',
  'password',
  'test'
]);

print_r(json_encode(BANCO_DE_DADOS));

?>