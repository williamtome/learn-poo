<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(200);
echo $primeiraConta->visualizaSaldo();
