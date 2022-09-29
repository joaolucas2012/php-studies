<?php

$fileName = "usuarios.csv";

if(file_exists($fileName)){
  // Abrindo o arquivo para leitura
  $file = fopen($fileName, "r");

  // Lendo a primeira linha do arquivo
  // $headers = fgets($file);

  // Usando o explode para retirar os separadores e pegar todo o texto do csv
  $headers = explode(",", fgets($file));
  // var_dump($headers);

  $data = array();

  // Enquanto houver linhas no array, execute
  while($row = fgets($file)){
    $rowData = explode(",", $row);
    // print_r($rowData);
    $linha = array();

    for($i = 0; $i < count($rowData); $i++) {
      $linha[$headers[$i]] = $rowData[$i];
    }

    array_push($data, $linha);
  }

  fclose($file);
  echo json_encode($data);
}

?>