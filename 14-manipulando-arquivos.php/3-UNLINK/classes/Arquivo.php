
<?php

class Arquivo {

  // Método que retorna uma mensagem de erro de arquivo não encontrado
  public function error($fileName){
    echo "<br/>Não foi possível encontrar o arquivo $fileName... <br/>";
  }

  // Método para criar um novo arquivo
  public function criaArquivo($fileName, $conteudo){
    if(!file_exists($fileName)){
      $newFile = fopen($fileName, "w+");
      echo "<br/>O arquivo $fileName foi criado com sucesso";
      fwrite($newFile, $conteudo);
      fclose($newFile);
    } else {
      echo "<br/>O arquivo $fileName já existe!<br/>";
    }
  }

  // Método para deletar um arquivo
  public function deletaArquivo($fileDirectory){
    if(file_exists($fileDirectory)){
      unlink($fileDirectory);
      echo "<br/>Arquivo $fileDirectory deletado com sucesso!<br/>";
    } else {
      Arquivo::error($fileDirectory);
    }
  }
  
  // Método para mover um arquivo de diretório
  public function moveArquivo($fileName, $location){
    $newLocation = $location . DIRECTORY_SEPARATOR . $fileName;
    if(!file_exists($fileName)){
      Arquivo::error($fileName);
    } else if(!file_exists($newLocation)){
      rename($fileName, $newLocation);
      echo "<br/>O arquivo $fileName foi movido para a pasta $location!";
    } else {
      echo "<br/>O arquivo $fileName já está na pasta $location!<br/>";
    }
  }

  // Método para renomear um arquivo
  public function renameFile($nomeAtual, $novoNome){
    if(file_exists($nomeAtual)){
      rename($nomeAtual, $novoNome);
      echo "<br/>O arquivo $nomeAtual foi renomeado com sucesso para $novoNome!<br/>";
    } else {
      Arquivo::error($nomeAtual);
    }
  }

  // Método para criar uma nova pasta
  public function criaPasta($nome){
    if(!is_dir($nome)){
      mkdir($nome);
      echo "<br/>Pasta $nome criada com sucesso!<br/>";
    } else {
      echo "<br/>A pasta $nome já existe!<br/>";
    }
  }

  // Método para remover todos os arquivos de uma pasta
  public function deleteAllFolderFiles($folderName){
    if(is_dir($folderName)){
      $filesArray = scandir($folderName);
      if(sizeOf($filesArray) > 0){
        foreach($filesArray as $item){
          if(!in_array($item, array(".", ".."))){
            unlink($folderName . DIRECTORY_SEPARATOR . $item);
          }
        }
        echo "<br/>Todos os arquivos da pasta $folderName foram deletados com sucesso!<br/>";
      }else{
        echo "<br/>A pasta $folderName já está vazia!<br/>";
      }
    } else {
      Arquivo::error($folderName);
    }
  }

  // Método para deletar uma pasta se ela estiver vazia
  public function deleteFolder($folderName){
    if(is_dir($folderName)){
      if(rmdir($folderName)){
        echo "<br/>A pasta $folderName foi deletada com sucesso!<br/>";
      } else {
        echo "<br/>A pasta $folderName não está vazia! Exclusão cancelada...<br/>";
      }
    } else {
      Arquivo::error($folderName);
    }
  }
}


?>