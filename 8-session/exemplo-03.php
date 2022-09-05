<?php

require_once("config.php");

// exibe a pasta onde a sessão está sendo salva
echo session_save_path();
echo "<br/>";

// exibe o status da sessão
var_dump(session_status());

echo "<br/>";

switch(session_status()) {
  case PHP_SESSION_DISABLED:
    echo "Session is disabled";
    break;
  case PHP_SESSION_NONE:
    echo "Session does not exist";
    break;
  case PHP_SESSION_ACTIVE:
    echo "Session is active";
    break;
}

?>