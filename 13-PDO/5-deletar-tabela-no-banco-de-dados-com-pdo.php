<?php

// CRIAR A CONEXÃO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

// parametro
$id = 6;

// unindo o parametro com a query
$stmt->bindParam(":ID", $id);

$stmt->execute();
echo "Dados APAGADOS com sucesso";


?>