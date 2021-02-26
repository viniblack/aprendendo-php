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

unset($contasCorrentes['123.123.458-50']);

titularComLetrasMaiusculas($contasCorrentes['123.456.783-90']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendendo PHP</title>
</head>

<body>
  <h1>Contas correntes</h1>

  <dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
      </dt>
      <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
  </dl>
</body>

</html>