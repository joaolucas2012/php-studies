<?php

// PDO é PHP data object, a forma mais recomendada pra trabalhar com PHP e banco de dados
// PDO é um padrão para se comunicar com o banco de dados de forma mais transparente
// Assim fica mais fácil mudar o bando de dados sem afetar o resto da aplicação
// A string esperada pela função é o banco de dados que queremos nos comunicar (nesse caso: mysql)
// Tem que passar o tipo do banco, o nome do banco, o usuário e senha
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// preparando a query para o banco de dados
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

// enviando a query para o banco de dados
$stmt->execute();

// fazendo a busca por associação no banco e armazenando na variavel $results
// $results = $stmt->fetchAll(); // --- isso traz o indice e o associativo

// fecth_assoc é uma constante da classe PDO
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // isso traz o associativo
// var_dump($results);

echo "<hr/>";

$count = 1;

// para cada linha do array
foreach($results as $row){
  echo var_dump($row)." é a linha $count<br/>";
  // pegue cada linha com sua chave (nome da coluna) e o seu valor
  foreach($row as $coluna => $value){
    echo "<strong>".$coluna.": </strong>".$value."<br/>";
    // var_dump($row);
  }
  $count += 1;
  echo "============================<br>";
}

?>