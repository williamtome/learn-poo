<?php

class Conta
{
    private string $cpfTitular;
    private string $titular;
    private float $saldo = 0;

    public function sacar(float $valor): void
    {
        if ($this->saldo < $valor) {
            echo "Saldo insufuciente" . PHP_EOL;
            return;
        }

        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if ($valor <= 0) {
            echo "O valor a depositar deve ser positivo!";
            return;
        }

        $this->saldo += $valor;

        echo "Depósito realizado com sucesso." . PHP_EOL;
    }

    public function transferir(float $valorATransferir, Conta $conta)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Valor indisponível para transferência!" . PHP_EOL;
            return;
        }

        $this->sacar($valorATransferir);

        $conta->depositar($valorATransferir);
    }

    public function visualizarSaldo(): string
    {
        return "Saldo: R$ " . $this->saldo . PHP_EOL;
    }
}
