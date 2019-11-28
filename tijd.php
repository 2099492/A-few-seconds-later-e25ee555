<?php
$int = (int)
$string = readline();

$pos = strpos($int,$string);

if ($pos === false) {
  echo "Geen tijd gevonden";
}else {
  echo $string . 's';
}
 ?>
