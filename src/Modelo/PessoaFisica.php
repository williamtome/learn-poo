<?php

namespace Alura\Banco\Modelo;

abstract class PessoaFisica
{
    use AcessoPropriedades;

    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nome)
    {
        if (str_word_count($nome) == 0) {
            throw new \UnexpectedValueException('Nome do titular é obrigatório.');
        }

        if (str_word_count($nome) == 1) {
            throw new NomeCurtoException();
        }

        $this->nome = $nome;
    }
}
