<?php

class Documento {

  private $numero;

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($n){
    $this->numero = $n;
  }
}

class Cpf extends Documento {
  public function validarCPF():string{
    // $numeroCpf = $this->getNumero();

    // mensagem de erro
    $erro = "CPF inválido";

    // mensagem de sucesso
    $sucesso = "CPF válido!";

    // validação do CPF
    //Verifica se um número foi informado
    if(empty($cpf)) {
      return $erro;
    }

    // Elimina possível máscara
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
    
    // Verifica se o número de digitos informados é igual a 11
    if (strlen($cpf) != 11) {
      echo "length";
      return $erro;
    }
    
    // Verifica se nenhuma das sequências invalidas abaixo foi digitada
    else if ($cpf == '00000000000' || 
      $cpf == '11111111111' || 
      $cpf == '22222222222' || 
      $cpf == '33333333333' || 
      $cpf == '44444444444' || 
      $cpf == '55555555555' || 
      $cpf == '66666666666' || 
      $cpf == '77777777777' || 
      $cpf == '88888888888' || 
      $cpf == '99999999999') {
      return $erro;
      // Calcula os digitos verificadores para verificar se o CPF é válido
    } else {   
        
      for ($t = 9; $t < 11; $t++) {
          
        for ($d = 0, $c = 0; $c < $t; $c++) {
          $d += $cpf{$c} * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf{$c} != $d) {
          return $erro;
        }
      }

      return $sucesso;
    }
  }
}

$doc = new Cpf();
$doc->setNumero("111222333-44");
echo $doc->validarCPF();
?>