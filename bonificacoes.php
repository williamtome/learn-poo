<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Servico\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Funcionario(
    'William Tomé',
    new Cpf('012.345.678-90'),
    'Desenvolvedor',
    2000
);

$umaFuncionaria = new Funcionario(
    'Débora V.',
    new Cpf('465.751.021-05'),
    'Gerente',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();
