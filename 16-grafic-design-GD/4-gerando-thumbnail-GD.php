<?php

header("Content-Type: image/jpeg");

$file = "images/wallpaper.jpg";

// Redimensionando a imagem com altura e largura novas
$new_width = 720;
$new_height = 480;

// Pegando o tamanho da imagem carregada
/* 
$data = getimagesize($file);
$width = $data[0];
$height = $data[1];
*/
list($oldWidth, $oldHeight) = getimagesize($file);

// Criando a imagem de tamanho reduzido com as cores reais
$newImage = imagecreatetruecolor($new_width, $new_height);
$oldImage = imagecreatefromjpeg($file);

/*
imagecopyresampled(
    GdImage $dst_image, -> Imagem destino
    GdImage $src_image, -> Imagem de origem
    int $dst_x, -> Onde o eixo x deve começar na imagem destino
    int $dst_y, -> Onde o eixo Y deve começar na imagem de origem
    int $src_x, -> Onde o eixo x deve começar na imagem de origem
    int $src_y, -> Onde o eixo Y deve começar na imagem de origem
    int $dst_width, -> Largura da imagem destino
    int $dst_height, -> Altura da imagem destino
    int $src_width, -> Largura da imagem de origem
    int $src_height -> Altura da imagem de origem
): bool
*/

// Dimensionando a nova imagem a partir da imagem de origem
imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $new_width, $new_height, $oldWidth, $oldHeight);

// Gerando a imagem destino em jpg
imagejpeg($newImage);

// Destruindo as duas imagens da memória
imagedestroy($oldImage);
imagedestroy($newImage);

?>