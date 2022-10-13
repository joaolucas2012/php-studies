<?php
/* GRAFIC DESIGN (GD) */
// Primeira parte do código, que deve ser ativada por último (comentar)
header("Content-Type: image/png");

// Função que cria uma imagem. Ela recebe a largura e altura em px como parâmetros
$image = imagecreate(256, 256);

// Definindo a paleta de cores, sendo que a primeira cor se torna a cor de fundo da imagem
$seaBlue = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Escrevendo alguma coisa na tela
// imagestring($image, font, x(é a margem esquerda em px), y(é a margem direita em px), string, color);
imagestring($image, 5, 60, 120, "Eu amo PHP7", $black);

// Gerando uma imagem em png (renderizando a imagem programada)
imagepng($image);

// Destruindo essa variável resource
imagedestroy($image);

?>