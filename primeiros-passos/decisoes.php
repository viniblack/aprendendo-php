<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
  echo "Você tem $idade anos. Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas >= 2) {
  echo "Você tem $idade anos, mas esta acompanhado. Pode entrar";
} else {
  echo "Você tem $idade anos e não esta acompanhado. Você não pode entrar.";
}

/*  Operador Ternário
 $mensagem = $idade >= 16 && $numeroDePessoas >= 2  ? "Você tem $idade anos, mas esta acompanhado. Pode entrar" : "Você tem $idade anos e não esta acompanhado. Você não pode entrar.";
*/

echo  PHP_EOL;
echo "Adeus";
