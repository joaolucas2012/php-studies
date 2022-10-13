<?php

// Cria um arquivo txt com o w+ para dizer que vai ser escrito algo dentro desse txt
$file = fopen("log.txt", "a+");

$frase = "A data de hoje é ".date("Y-m-d H:i:s")."\r\n";

// Escrever dentro do arquivo
fwrite($file, $frase);

// Finalizar e fechar o arquivo
fclose($file);

echo "Arquivo criado com sucesso!";

?>