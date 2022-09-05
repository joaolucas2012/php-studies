<?php

$pessoas = array();

array_push($pessoas, array(
  'nome'=>'Glaucio',
  'idade'=>25
));

array_push($pessoas, array(
  'nome'=>'João',
  'idade'=>21
));

print_r($pessoas);
echo "<hr/>";
print_r($pessoas[0]);
echo "<hr/>";
print_r($pessoas[1]['nome']);

?>