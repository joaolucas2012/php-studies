<?php

namespace Cliente;

// O \Cadastro faz a classe herdar as funções da classe cadastro
// que está na raiz onde a pasta foi criada
class Cadastro extends \Cadastro {
  public function registrarVenda(){
    echo "Foi registrada uma venda para o cliente " . $this->getNome();
  }
}

?>