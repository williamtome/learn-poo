<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaSalario;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaCorrente(
    new Titular(
        'William T.',
        new Cpf('212.456.899-10'),
        new Endereco('rua l', '12', 'Tal', 'Canoas')
    )
);

$contaPoupanca = new ContaPoupanca(
    new Titular(
        'Débora V.',
        new Cpf('123.456.768-10'),
        new Endereco('rua OP', '15', 'Não sei', 'Canoas')
    )
);

$contaSalario = new ContaSalario(
    new Titular(
        'Alefe M.',
        new Cpf('987.654.321-01'),
        new Endereco('rua Lá', '100', 'Ilha', 'POA')
    )
);

$conta->deposita(500);
echo $conta->visualizaDadosDoTitular();
$conta->saca(100);
echo $conta->visualizaDadosDoTitular();

$contaPoupanca->deposita(300);
echo $contaPoupanca->visualizaDadosDoTitular();
$contaPoupanca->saca(100);
echo $contaPoupanca->visualizaDadosDoTitular();

$contaSalario->deposita(200);
echo $contaSalario->visualizaDadosDoTitular();
$contaSalario->saca(50);
echo $contaSalario->visualizaDadosDoTitular();
