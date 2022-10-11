<?php

function trataNome($name){
  if(!$name){
    throw new Exception("Nome inválido!", 1);
  }

  echo ucfirst($name)."<br>";
}

try{
  trataNome("João");
  trataNome("");
}catch(Exception $e){
  echo $e->getMessage();
}finally{
  echo "O bloco try foi executado...";
}

?>