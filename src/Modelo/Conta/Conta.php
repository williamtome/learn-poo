<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

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
        if ($this->saldo < $valor) {
            echo "Saldo insufuciente" . PHP_EOL;
            return;
        }

        $this->saldo -= $valor;
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
        return "Titular: {$this->titular->recuperaNome()} CPF: {$this->titular->recuperaCpf()} Saldo: R$ {$this->saldo}" . PHP_EOL;
    }

    public static function mostrarTotalDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
