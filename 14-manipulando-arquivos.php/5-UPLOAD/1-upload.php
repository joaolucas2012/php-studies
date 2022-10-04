<!-- Enctype pega o arquivo em binário -->
<form method="POST" enctype="multipart/form-data" >
  <input type="file" name="fileUpload"/>
  <button type="submit">Send</button>
</form>

<?php

// Essa variavel de ambiente pega o tipo de requisição
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  // Primeiro o PHP move o arquivo para uma pasta temporária no servidor e
  // após isso o arquivo é movido da pasta temporária para o destino físico final
  // Esta é a variavel para guardar as informações do arquivo enviado por upload
  $file = $_FILES["fileUpload"]; // É nome do input field, que nesse caso é fileUpload

  // Tratar algum erro que possa existir
  if($file["error"]){
    throw new Exception("Error: " . $file["error"]);
  }
  // Nome do novo diretório final do upload
  $destinoUploads = "uploads";
  // Se o diretório não existir, crie ela
  if(!is_dir($destinoUploads)){
    mkdir($destinoUploads);
  }
  // Tenta mover o upload da pasta temporária do servidor para a pasta destinoUploads
  if(move_uploaded_file($file["tmp_name"], $destinoUploads . DIRECTORY_SEPARATOR . $file["name"])){
    echo "Upload realizado com sucesso!";
  } else{
    throw new Exception("Não foi possível realizar o upload");
  }

}

?>