<?php

require_once 'autoload.php';

use \Alura\Banco\Modelo\Conta\Conta;
use \Alura\Banco\Modelo\Conta\Titular;
use \Alura\Banco\Modelo\Cpf;
use \Alura\Banco\Modelo\Endereco;

$conta = new Conta(
    new Titular(
        'William T.',
        new Cpf('212.456.899-10'),
        new Endereco('rua l', '12', 'Tal', 'Canoas')
    )
);

$conta->deposita(500);
echo $conta->visualizaDadosDoTitular();
$conta->saca(100);
echo $conta->visualizaDadosDoTitular();
