<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $nome, string $cpf)
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
        return $this->cpf;
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