<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$william = new Titular('William Tomé', new Cpf('123.456.789-10'));
$primeiraConta = new Conta($william);
$primeiraConta->deposita(200);
echo $primeiraConta->visualizaDadosDoTitular();

$joao = new Titular('João das neves', new Cpf('015.515.542-15'));
$segundaConta = new Conta($joao);
$segundaConta->deposita(300);
echo $segundaConta->visualizaDadosDoTitular();

echo Conta::mostrarTotalDeContas() . PHP_EOL;
