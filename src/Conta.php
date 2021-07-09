<?php

class Conta
{
    private string $cpfTitular;
    private string $titular;
    private float $saldo = 0;

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

    public function visualizaSaldo(): string
    {
        return "Saldo: R$ " . $this->saldo . PHP_EOL;
    }
}
