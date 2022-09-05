<?php

// for de 100 a 200 numa lista suspensa
echo "<select>";

for($i = 100; $i < 201; $i++) {
  echo '<option value ="'.$i.'">'.$i.'</option>';
}

echo "</select>";

echo "<br/><br/> ---------------------------------------<br/><br/>";

// for de 0 a 1000, contando de 5 em 5
for($i = 0; $i < 1000; $i+=5) {
  // se o i for maior que 200 e menor que 500, pula o echo no laço for
  if($i > 200 && $i < 500) continue;
  // se o i for igual a 900, para o laço for
  if($i === 900) break;
  echo "$i<br/>";
}

?>