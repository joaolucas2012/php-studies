<?php

// Na transação, ou tudo dá certo e isso é confirmado com o comando COMMIT TRANSACTION, ou
// tudo dá errado e é cancelado com o ROLLBACK TRANSACTION

// CRIAR A CONEXÃO
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");

// ABRINDO A TRANSAÇÃO
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

// parametro
$id = 3;

$stmt->execute(array($id));

// $conn->rollback(); // rollback cancela a transação
$conn->commit(); // commit efetua a transação

echo "Dados foram APAGADOS";

?>