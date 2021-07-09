<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(200);
echo $primeiraConta->visualizarSaldo();
