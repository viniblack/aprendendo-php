<?php

$peso = 70;
$altura = 1.77;

$imc =  $peso / ($altura * $altura);


echo "Seu IMC é de " . round($imc, 1) . " Você está com IMC ";
if ($imc < 18.5) {
  echo "baixo";
} else if ($imc < 25) {
  echo "dentro";
} else {
  echo "acima";
}

echo "do recomendado";
