<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Cpf, PessoaFisica};

abstract class Funcionario extends PessoaFisica
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorDeAumento): void
    {
        if ($valorDeAumento < 0) {
            echo "Aumento deve ser positivo.";
            return;
        }

        $this->salario += $valorDeAumento;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
