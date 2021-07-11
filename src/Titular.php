<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

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

    private function validaNomeTitular(string $nome)
    {
        if (str_word_count($nome) == 0) {
            echo "Informe o nome do titular." . PHP_EOL;
            exit();
        }

        if (str_word_count($nome) == 1) {
            echo "Informe o sobrenome do titular." . PHP_EOL;
            exit();
        }

        $this->nome = $nome;
    }
}