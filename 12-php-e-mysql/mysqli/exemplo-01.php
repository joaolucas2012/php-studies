<?php

// cria a conexão com o banco de dados
// pede o IP, o usuário, a senha e o nome do banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

// tratamento para o caso de acontecer algum erro
if ($conn->connect_error){
  echo "Error: $conn->connect_error";
  exit;
}

// fazer um insert no banco de dados através do PHP
// o prepare() prepara um comando que vai ser enviado pro banco de dados
// stmt é statement
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

// o metodo bind_param espera como primeiro parametro os tipos das interrogações
// dadas pro VALUES()
// "ss" quer dizer que são duas strings
// se fosse inteiro seria i, se fosse float seria d, etc
// após isso o bind_param recebe os valores que precisam ser inseridos no banco com a query
$stmt->bind_param("ss", $login, $password);

// valores a serem inseridos
$login = "user";
$password = "12345";

// O execute() executa o código da variavel statement
$stmt->execute();

// se for preciso usar o statement para adicionar mais um usuário, basta
// definir os dados do novo usuario e depois usar o stmt->execute() novamente
$login = "Jonas";
$password = "senha";

$stmt->execute();

// SCRIPT PARA CRIAÇÃO DO BANDO DE DADOS 

/*
USE dbphp7;

CREATE TABLE tb_usuarios (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('root', '!@#$%');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;

SELECT * FROM tb_usuarios;

DELETE FROM tb_usuarios WHERE  idusuario = 1;

SELECT * FROM tb_usuarios;

TRUNCATE TABLE tb_usuarios;

*/

?>