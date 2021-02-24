<?php

function sacar(array $conta, float $valorASacar): array
{
  if ($valorASacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar");
  } else {
    $conta['saldo'] -= $valorASacar;
  }
  return $conta;
}

function exibeMensagem(string $mensagem)
{
  echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar)
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Você não pode depositar R$$valorADepositar. Depositos precisam ser positivos");
  }
  return $conta;
}

$contasCorrentes = [
  '123.456.635-20' =>  [
    'titular' => 'Maria',
    'saldo' => 10000
  ],
  '123.123.458-50' => [
    'titular' => 'Alberto',
    'saldo' => 300
  ],
  '123.456.783-90' => [
    'titular' => 'Vinicius',
    'saldo' => 100
  ],
];

$contasCorrentes['123.456.635-20'] = sacar(
  $contasCorrentes['123.456.635-20'],
  500
);

$contasCorrentes['123.123.458-50'] = sacar(
  $contasCorrentes['123.123.458-50'],
  200
);

$contasCorrentes['123.456.783-90'] = depositar(
  $contasCorrentes['123.456.783-90'],
  0
);



foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);
}
