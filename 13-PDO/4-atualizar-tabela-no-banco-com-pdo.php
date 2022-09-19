<?php

// CRIAR A CONEXÃO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

// parametros
$login = "james";
$password = "jshgdjshdj";
$id = 2;

// unindo os parametros com a query
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();
echo "Dados alterados com sucesso";


?>