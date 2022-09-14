<?php

// criação da conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

// tratamento para o caso de acontecer algum erro
if ($conn->connect_error){
  echo "Error: $conn->connect_error";
  exit;
}

// executar um comando direto no banco de dados sem o prepare()
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY idusuario");

$data = array();

// esse while só é executado se os dados existirem.
// se houverem dados, eles serão armazenados na variavel $row por causa do fetch_array()
// se houverem dados, o fetch_array será true, se não, ele será false e para o laço while
// enquanto se conectar com o banco de dados e houverem dados armazene-os na variável $row
// while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
while($row = $result->fetch_assoc()){
  var_dump($row);

  // isso será um array de arrays
  array_push($data, $row);
}
echo "<hr />";
print_r($data);
echo "<hr />";
echo json_encode($data);


?>