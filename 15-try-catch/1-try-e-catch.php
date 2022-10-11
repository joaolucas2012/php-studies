<?php

try{
  throw new Exception("Houve um erro", 400);
} catch(Exception $e) {
  echo json_encode(array(
    "message"=>$e->getMessage(),
    "line"=>$e->getLine(),
    "file"=>str_replace("\\", "/", $e->getFile()),
    "code"=>$e->getCode()
  ));
}

?>