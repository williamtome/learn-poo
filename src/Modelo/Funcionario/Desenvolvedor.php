<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel(): void
    {
        $valorDeAumento = $this->recuperaSalario() * 0.75;
        $this->recebeAumento($valorDeAumento);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }

    public function adicionaValeRefeicao(): float
    {
        return 400;
    }
}
