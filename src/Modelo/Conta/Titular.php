<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Contrato\AutenticavelInterface;
use Alura\Banco\Modelo\{PessoaFisica, Endereco, Cpf};

class Titular extends PessoaFisica implements AutenticavelInterface
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