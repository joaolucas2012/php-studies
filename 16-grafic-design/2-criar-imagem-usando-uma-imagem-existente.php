<?php

// Criando a imagem a partir da imagem certificado.jpeg
$image = imagecreatefromjpeg("certificado.jpg");

// Definindo a paleta de cores
$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

// Escrevendo o título
imagestring($image, 5, 390, 200, utf8_decode("CERTIFICADO DE CONCLUSÃO"), $titleColor);
imagestring($image, 5, 415, 300, utf8_decode("João Lucas Ribeiro"), $titleColor);
imagestring($image, 3, 390, 350, utf8_decode("Curso concluído em: ").date("d/m/Y"), $titleColor);

// Criando o header
header("Content-Type: image/jpg");

// Renderizando a imagem em jpeg
// imagejpeg($image);

// salvando a imagem no diretório
// o último parâmetro é a porcentagem da resolução desejada para a imagem
imagejpeg($image, "certificado".date("d_m_Y").".jpg", 98);

// Liberando a alocação de memória
imagedestroy($image);

?>