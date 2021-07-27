<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    private const TARIFA_SAQUE_POUPANCA = 0.03;

    public function __construct(Titular $titular)
    {
        parent::__construct($titular);
    }

    public function saca(float $valor): void
    {
        $tarifaSaque = $valor * self::TARIFA_SAQUE_POUPANCA;
        $valorSaque = $valor + $tarifaSaque;

        if ($this->saldo < $valorSaque) {
            echo "Saldo insufuciente" . PHP_EOL;
            return;
        }

        $this->saldo -= $valorSaque;
    }
}