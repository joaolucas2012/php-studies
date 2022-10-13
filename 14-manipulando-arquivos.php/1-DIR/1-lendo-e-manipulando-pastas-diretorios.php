<?php

class Diretorio {
  // Método que cria um diretório
  public function criaDiretorio($name){
    // Verificar se um diretório existe
    if(!is_dir($name)){
      // Cria um diretório
      mkdir($name);
      echo "<br/>Diretório images criado com sucesso!<br/>";
    } else {
      echo "<br/>Já existe o diretório $name<br/>";
    }
  }

  // Método que exclui um diretório
  public function deletaDiretorio($name){
    if(!is_dir($name)){
      echo "<br/>Não é possível excluir um diretório que não existe!<br/>";
    } else{
      // Remove um diretório
      rmdir($name);
      echo "<br/>Diretório $name excluído com sucesso!<br/>";
    }
  }

  // Método que escaneia um diretório
  public function scan($name){
    // Função que escaneia um diretório e retorna um array com os itens que existem dentro dele
    return scandir($name);
  }

  // Método que percorre um array de um diretório e retorna apenas os nomes dos arquivos
  public function getArquivos($files, $name){
    $info = array();
    foreach($files as $file){
      if(!in_array($file, array(".", ".."))){
        $fileName = $name . DIRECTORY_SEPARATOR . $file;
        $fileData = pathinfo($fileName);
        // Adiciona o tamanho do arquivo em bytes no array de informações
        $fileData["size"] = filesize($fileName) . " bytes";
        // Adiciona a data de modificação do arquivo no array de informações
        $fileData["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
        // Adiciona a URL de onde o arquivo se localiza
        $fileData["url"] = "http://localhost/php-studies/14-manipulando-arquivos.php/DIR/".str_replace("\\", "/", $fileName);
        array_push($info, $fileData);
      }
    }
    return json_encode($info);
  }
}

$name = "images";
$dir = new Diretorio();
// $dir->criaDiretorio($name);
// $dir->deletaDiretorio($name);
$diretorio = $dir->scan($name);
$result = $dir->getArquivos($diretorio, $name);
echo $result;
?>

