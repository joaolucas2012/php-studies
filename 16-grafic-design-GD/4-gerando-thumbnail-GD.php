<?php

header("Content-Type: image/jpeg");

$file = "images/wallpaper.jpg";

// Redimensionando a imagem com altura e largura novas
$new_width = 256;
$new_height = 256;

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
    GdImage $dst_image,
    GdImage $src_image,
    int $dst_x,
    int $dst_y,
    int $src_x,
    int $src_y,
    int $dst_width,
    int $dst_height,
    int $src_width,
    int $src_height
): bool
*/
// imagecopyresampled($newImage, $oldImage, );

?>