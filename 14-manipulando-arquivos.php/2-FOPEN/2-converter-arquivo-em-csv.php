<?php

require_once("config.php");

// Fazendo a conexão com o banco de dados e consultando alguns dados dele
$sql = new SQL;
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");
// print_r($usuarios);

// Detectando os nomes das colunas do banco de dados
$headers = array();

foreach($usuarios[0] as $key => $value){
  array_push($headers, ucfirst($key));
}

// print_r($headers);

// Criando um separador de strings para os itens do array
// echo implode(" | ", $headers);

// Adicionando esses dados a um arquivo .csv
$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(" | ", $headers)."\r\n");

// Alimentando o csv com os dados dos usuários
foreach($usuarios as $row){
  $data = array();

  foreach($row as $key => $value){
    array_push($data, $value);
  }

  // Adicionando os dados da linha no arquivo .csv
  fwrite($file, implode(" | ", $data)."\r\n");
}

fclose($file);
echo "Tudo deu certo!";

?>