<?php

$fileName = "Joao.png";

// Pega os detalhes de um arquivo e converte para uma string base64
$base64 = base64_encode(file_get_contents($fileName));

// Pega as informações do arquivo
$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileInfo->file($fileName);

// Padrão para exibir base64
$base64Encoded = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64Encoded?>" target="_blank">Link para imagem</a>
<img src="<?=$base64Encoded?>" alt="Imagem">