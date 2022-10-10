<?php

// Para recuperar os cookies, é usado um array super global que contém os cookies da pessoa

// Verificando se o cookie existe e recuprendo o mesmo como objeto
if(isset($_COOKIE["Nome_do_cookie"])){
  $obj = json_decode($_COOKIE["Nome_do_cookie"]);
  echo $obj->empresa;
}

?>