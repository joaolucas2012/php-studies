<?php

class Cadastro{
  // atributos
  private $nome;
  private $email;
  private $senha;

  // getters and setters
  public function getNome():string{
    return ->nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getEmail():string{
    return ->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }

  public function getSenha():string{
    return ->senha;
  }
  public function setSenha($senha){
    $this->senha = $senha;
  }
}

?>