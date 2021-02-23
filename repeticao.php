<?php

// while ($numero <= 10) {
//   echo  "#$numero" . PHP_EOL;
//   $numero++;
// }

for ($numero = 1; $numero <= 10; $numero++) {
  if ($numero === 8) {
    break;
  }
  echo  "#$numero" . PHP_EOL;
}
