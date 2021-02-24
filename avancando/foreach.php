<?php


$contasCorrentes = [
  1234567890 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
  ],
  1234566390 =>  [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  1231235890 => [
    'titular' => 'Alberto',
    'saldo' => 300
  ]
];

$contasCorrentes[] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}
