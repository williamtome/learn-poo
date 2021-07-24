<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco, Funcionario};

$endereco = new Endereco('Clóvis Beviláqua', '945', 'um bairro', 'Canoas');
$funcionario = new Funcionario('William Tomé', new Cpf('123.456.789-10'), 'Desenvolvedor Back-end');
$william = new Titular('William Tomé', new Cpf('123.456.789-10'), $endereco);
$primeiraConta = new Conta($william);
$primeiraConta->deposita(200);
echo $primeiraConta->visualizaDadosDoTitular();

$funcionario = new Funcionario('João das neves', new Cpf('015.515.542-15'), 'Auxiliar Administrativo');
$joao = new Titular('João das neves', new Cpf('015.515.542-15'), $endereco);
$segundaConta = new Conta($joao);
$segundaConta->deposita(300);
echo $segundaConta->visualizaDadosDoTitular();

echo Conta::mostrarTotalDeContas() . PHP_EOL;
