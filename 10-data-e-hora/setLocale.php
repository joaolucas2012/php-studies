<?php

// mudar a localização para português
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo "Hoje é " . strftime("%A") . " do mês de " . ucwords(strftime("%B"));

// Para saber mais
// https://www.php.net/manual/pt_BR/function.strftime.php

?>