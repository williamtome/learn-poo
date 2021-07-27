<?php


namespace Alura\Banco\Modelo\Conta;


class ContaSalario extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0;
    }
}