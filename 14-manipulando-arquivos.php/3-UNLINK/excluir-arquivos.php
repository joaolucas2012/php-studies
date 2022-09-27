<?php
require_once("config.php");
// Criando uma instância da classe arquivo
$arquivo = new Arquivo();

// Criando um novo arquivo no diretório
$conteudo = "Este é um teste para praticar o que foi ensinado\r\n";
$arquivo->criaArquivo("teste.txt", $conteudo);

// Criando uma nova pasta
$arquivo->criaPasta('Teste');

// Movendo o arquivo teste.txt para a pasta Teste
$arquivo->moveArquivo("teste.txt", "Teste");

// Criando outro arquivo na pasta Teste
$arquivo->criaArquivo("teste2.txt", "Apenas outro teste");
$arquivo->moveArquivo("teste2.txt", "Teste");

// Deletando o arquivo teste.txt
$arquivo->deletaArquivo("Teste/teste.txt");

// Renomeando o arquivo teste2.txt para testeFinal.txt
// $arquivo->renameFile("teste2.txt", "testeFinal.txt");
$arquivo->renameFile("Teste/teste2.txt", "Teste/testeFinal.txt");

// Criando a paste Teste2
$arquivo->criaPasta("Teste2");

// Criando 7 arquivos na pasta Teste2
for($i = 0; $i < 7; $i++){
  $fileName = "file". $i . ".txt";
  $directory = "Teste2" . DIRECTORY_SEPARATOR . $fileName;
  $arquivo->criaArquivo($directory, "Teste $i");
}

// Deletando todos os arquivos da pasta Teste
$arquivo->deleteAllFolderFiles("Teste2");

// Deletando a pasta Teste2
$arquivo->deleteFolder("Teste2");

?>