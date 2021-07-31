<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Contrato\AutenticavelInterface;

class Gerente extends Funcionario implements AutenticavelInterface
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function adicionaValeRefeicao(): float
    {
        return 400;
    }
}
