<?php

  /* Variáveis pré-definidas */

  // converter uma variavel superglobal string para int no método get
  $nome = (int)$_GET["a"];
  var_dump($nome);

  /* pegar o endereço IP remoto do usuário */
  // $ip = $_SERVER["REMOTE_ADDR"];

  /* pegar o caminho da URL*/
  $ip = $_SERVER["SCRIPT_NAME"];
  var_dump($ip);

?>