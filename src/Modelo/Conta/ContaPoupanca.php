<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function __construct(Titular $titular)
    {
        parent::__construct($titular);
    }

    public function saca(float $valor): void
    {
        $tarifaSaque = $valor * $this->percentualTarifa();
        $valorSaque = $valor + $tarifaSaque;

        if ($this->saldo < $valorSaque) {
            echo "Saldo insufuciente" . PHP_EOL;
            return;
        }

        $this->saldo -= $valorSaque;
    }

    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}