<?php

// Essa função recebe os parâmetros do erro e executa uma ação
// Recebe o código do erro, a mensagem, o arquivo e a linha
function error_handler($code, $message, $file, $line) {
  echo json_encode(array(
    "code"=>$code, 
    "message"=>$message, 
    "file"=>$file,
    "line"=>$line
  ));
}

set_error_handler("error_handler");
echo 100/0;

?>