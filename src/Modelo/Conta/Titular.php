<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\PessoaFisica;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;

class Titular extends PessoaFisica
{
    private Endereco $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}