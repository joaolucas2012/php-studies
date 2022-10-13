<?php

$link = "https://st2.depositphotos.com/6544740/9337/i/600/depositphotos_93376372-stock-photo-sunset-over-sea-pier.jpg";

// Pegar o conteúdo do arquivo em binário
$content = file_get_contents($link);

// Transformar o que está vindo da URL em um arquivo real
$parse = parse_url($link);
// Isso pegará o caminho assim:
/* array(3) {
  ["scheme"]=>
  string(5) "https"
  ["host"]=>
  string(21) "st2.depositphotos.com"
  ["path"]=>
  string(79) "/6544740/9337/i/600/depositphotos_93376372-stock-photo-sunset-over-sea-pier.jpg"
}
*/

// Pegar somente o nome do arquivo no caminho da URL com a chave "path"
$basename = basename($parse["path"]);
// Isso pega o nome assim:
/* string(79) "/6544740/9337/i/600/depositphotos_93376372-stock-photo-sunset-over-sea-pier.jpg */


// Recriar o arquivo com o nome pego no basename, usando o file open
$file = fopen($basename, "w+");

// Escrever todo o conteúdo dentro do arquivo. O conteúdo foi pego na URL
fwrite($file, $content);
fclose($file);

?>

<!-- Chamando a imagem com o nome $basename para saber se já foi recriada -->
<img src="<?=$basename?>" alt="Imagem baixada"/>