<?php

$pessoa = array(
  'nome'=>'João',
  'idade'=>21
);

// mudando por valor
echo "Mudando por valor, altera o valor no foreach, mas no array fica igual<br/>";
foreach($pessoa as $value) {
  if(gettype($value) === 'integer') $value+=10;
  echo $value . "<br/>";
}

print_r($pessoa);

echo "<hr/>";

// mudando por referencia
echo "Mudando por referencia, altera o valor no foreach e no array também<br/>";
foreach($pessoa as &$value) {
  if(gettype($value) === 'integer') $value+=10;
  echo $value . "<br/>";
}

print_r($pessoa);

?>