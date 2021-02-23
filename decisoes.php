<?php

$idade = 18;
$nome = "Vinicius";

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos." . PHP_EOL;
  echo "Pode entrar";
} else {
  echo "Você tem $idade anos." . PHP_EOL;
  echo "Não pode entrar";
}

echo  PHP_EOL;
echo "Adeus";
