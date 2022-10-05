<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";
$arquivo = $dir1 . DIRECTORY_SEPARATOR . $filename;

if(!file_exists($arquivo)){
  $file = fopen($arquivo, "w+");
  fwrite($file, "Teste");
  fclose($file);
}

// Movendo o arquivo renomeando o mesmo
rename($arquivo, $dir2 . DIRECTORY_SEPARATOR . $filename);
echo "Arquivo movido com sucesso!";

?>