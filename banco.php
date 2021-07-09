<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('William Tomé', '123.456.789-10');
$primeiraConta->deposita(200);
echo $primeiraConta->visualizaDadosDoTitular();

$segundaConta = new Conta('João das neves', '015.515.542-15');
$segundaConta->deposita(300);
echo $segundaConta->visualizaDadosDoTitular();
