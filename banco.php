<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('William Tomé', '123.456.789-10'));
$primeiraConta->deposita(200);
echo $primeiraConta->visualizaDadosDoTitular();

$segundaConta = new Conta(new Titular('João das neves', '015.515.542-15'));
$segundaConta->deposita(300);
echo $segundaConta->visualizaDadosDoTitular();

echo Conta::mostrarTotalDeContas() . PHP_EOL;
