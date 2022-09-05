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

echo json_encode($pessoas);

?>