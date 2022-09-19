<?php

// Tem que passar o tipo do banco, o nome do banco, o usuário e senha
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS; ConnectionPooling=0", "sa", "Root@1234");

// preparando a query para o banco de dados
$stmt = $conn->prepare("SELECT * FROM db_usuarios ORDER BY idusuario");

// enviando a query para o banco de dados
$stmt->execute();

// fazendo a busca por associação no banco e armazenando na variavel $results
// $results = $stmt->fetchAll(); // --- isso traz o indice e o associativo

// fecth_assoc é uma constante da classe PDO
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // isso traz o associativo
echo json_encode($results);

?>