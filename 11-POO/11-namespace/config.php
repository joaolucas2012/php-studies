<?php

spl_autoload_register(function($nameClass){
  // nome da pasta
  $dirClass = "Classes";
  // caminho do arquivo com concatenação de string
  $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

  // verifica se o arquivo existe. Se existir, ele exige o carregamento dele se for
  // necessário.
  if(file_exists($fileName)){
    require_once($fileName);
  }
});

?>