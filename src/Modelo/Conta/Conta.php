<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valor): void
    {
        $tarifaSaque = $valor * $this->percentualTarifa();
        $valorSaque = $valor + $tarifaSaque;

        if ($this->saldo < $valorSaque) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valor): void
    {
        if ($valor <= 0) {
            echo "O valor a depositar deve ser positivo!";
            return;
        }

        $this->saldo += $valor;

        echo "Depósito realizado com sucesso." . PHP_EOL;
    }

    public function transfere(float $valorATransferir, Conta $conta)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Valor indisponível para transferência!" . PHP_EOL;
            return;
        }

        $this->saca($valorATransferir);

        $conta->deposita($valorATransferir);
    }

    public function visualizaDadosDoTitular(): string
    {
        return "Titular: {$this->titular->recuperaNome()} CPF: {$this->titular->recuperaCpf()} Saldo: R$ $this->saldo" . PHP_EOL;
    }

    public static function mostrarTotalDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
