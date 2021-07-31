<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Contrato\AutenticavelInterface;

class Diretor extends Funcionario implements AutenticavelInterface
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }

    public function adicionaValeRefeicao(): float
    {
        return 400;
    }
}
