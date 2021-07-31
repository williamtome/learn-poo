<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

$umDiretor = new Diretor(
    'Fulano S.',
    new Cpf('626.486.220-23'),
    6000
);

$autenticador = new Autenticador();
$autenticador->tentaLogin($umDiretor, '1234');
