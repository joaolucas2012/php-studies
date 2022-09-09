<?php

echo date("d/m/Y H:i:s");

$ts1 = strtotime("2001-09-11");
$ts2 = strtotime("+1 day");
$ts3 = strtotime("+1 week");
$ts4 = strtotime("+1 year");

echo "<br/>" . date("l, d/m/Y", $ts1);
echo "<br/>" . date("l, d/m/Y", $ts2);
echo "<br/>" . date("l, d/m/Y", $ts3);
echo "<br/>" . date("l, d/m/Y", $ts4);

// Para saber mais sobre data no site
// https://www.php.net/manual/pt_BR/function.date.php

?>