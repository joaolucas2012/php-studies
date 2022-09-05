<?php

require_once "config.php";

// limpar variaveis de sessão
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

// limpa a variavel e remove o acesso a sessão
session_destroy();

?>