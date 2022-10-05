<?php

$cep = "37514000";
$link = "https://viacep.com.br/ws/$cep/json/";

// Variável que chama a biblioteca Curl
$ch = curl_init($link);

// Solicitando uma resposta 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Execurando o curl com as opções passadas anteriormente e recebendo um json como resposta
$response = curl_exec($ch);

// Liberar a conexão após pegar a resposta
curl_close($ch);

// Decodificando o json e transformando em um array (com o true)
$data = json_decode($response, true);
print_r($data);
// print_r($data["localidade"]);

?>