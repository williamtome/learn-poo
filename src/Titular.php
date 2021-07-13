<?php

class Titular extends PessoaFisica
{
    private Endereco $endereco;
    private Funcionario $funcionario;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco, Funcionario $funcionario)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
        $this->funcionario = $funcionario;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}