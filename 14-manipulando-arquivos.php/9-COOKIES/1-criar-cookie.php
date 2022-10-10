<?php

$data = array(
  "empresa"=>"Prime Interway"
);

// O cookie armazena um dado temporário e dura um determinado tempo que precisa ser informado
// é um arquivo físico criado tanto no servidor web como na na máquina do usuário
// Muito usado no ecommerce (armazena produtos no carrinho)

// Função que cria ou define um cookie
// O primeiro parâmetro é o nome do cookie (precisa ser um nome único)
// O segundo parâmetro é o valor do cookie 
// O terceiro parâmetro é o valor do tempo/momento em que o cookie deve expirar 
// Nesse exemplo, o cookie expira após 3600 segundos (1 hora)
setcookie("Nome_do_cookie", json_encode($data), time() + 3600);
echo "Cookie criado com sucesso!";
?>