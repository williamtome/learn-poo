<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorDeVideo, Gerente, Desenvolvedor};
use Alura\Banco\Servico\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'William Tomé',
    new Cpf('012.345.678-90'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Débora V.',
    new Cpf('465.751.021-05'),
    3000
);

$diretor = new Diretor(
    'Lucas C.',
    new Cpf('777.722.044-98'),
    5000
);

$umEditor = new EditorDeVideo(
    'Rafael S.',
    new Cpf('995.441.013-12'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($diretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
