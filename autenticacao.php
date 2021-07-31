<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Servico\Autenticador;

$umDiretor = new Diretor(
    'Fulano S.',
    new Cpf('626.486.220-23'),
    6000
);

$umGerente = new Gerente(
    'Cicrano V.',
    new Cpf('174.333.924-01'),
    9000
);

$umTitular = new Titular(
    'Maria A.',
    new Cpf('495.001.545-66'),
    new Endereco('Calcaria', '90', 'Tal', 'Porto Alegre')
);

$autenticador = new Autenticador();
$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umGerente, '4321');
$autenticador->tentaLogin($umTitular, 'abcd');
