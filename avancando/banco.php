<?php

require_once 'funcoes.php';

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
  900
);

unset ($contasCorrentes['123.123.458-50']);

titularComLetrasMaiusculas($contasCorrentes['123.456.783-90']);

foreach ($contasCorrentes as $cpf => $conta) {
  // List
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  /*
  posso passar tanto:
  ['titular' => $titular, 'saldo' => $saldo] = $conta; 
  ou
  list('titular' => $titular, 'saldo' => $saldo) = $conta;
    */
  exibeMensagem("$cpf $titular $saldo");
}
