<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Rua qualquer', '45b', 'qualquer coisa', 'Porto');
$outroEndereco = new Endereco('Rua da lapa', '444', 'Qualquer', 'Petropolis');

echo $umEndereco;
