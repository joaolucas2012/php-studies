<?php

// CRIAR A CONEXÃO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

// parametros
$login = "josefina";
$password = "kjwsgdjhsgdjs";

// unindo os parametros com a query
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

try {
  $stmt->execute();
  echo "$login inserido com sucesso";
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>