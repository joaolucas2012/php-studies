<?php

// Criando a imagem a partir da imagem certificado.jpg
$image = imagecreatefromjpeg("images/certificado.jpg");

// Definindo a paleta de cores
$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

// Definindo fontes (aqui é preciso colocar __DIR__.DIRECTORY_SEPARATOR. para não dar erro)
$bevanRegular = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$playballRegular = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

// Escrevendo o título com a fonte
// Parâmetros: 
/* $image, 
  tamanho da fonte,
  ângulo da fonte,
  margem esquerda em px,  
  margem direita em px, 
  cor do título,
  diretório da fonte usada,
  texto ou frase
*/
imagettftext($image, 28, 0, 160, 200, $titleColor, $bevanRegular, "CERTIFICADO DE CONCLUSÃO");
imagettftext($image, 32, 0, 350, 300, $titleColor, $playballRegular, "João Lucas Ribeiro");
imagestring($image, 3, 390, 350, utf8_decode("Curso concluído em: ").date("d/m/Y"), $grey);

// Criando o header
header("Content-Type: image/jpg");

// Renderizando a imagem em jpeg
imagejpeg($image);

// Liberando a alocação de memória
imagedestroy($image);

?>