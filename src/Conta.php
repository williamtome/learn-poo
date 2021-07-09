<?php

class Conta
{
    public string $cpfTitular;
    public string $titular;
    private float $saldo = 0;

    public function sacar($valor): void
    {
        if ($this->saldo < $valor) {
            echo "Saldo insufuciente" . PHP_EOL;
        } else {
            $this->saldo -= $valor;
        }
    }

    public function depositar($valor): void
    {
        if ($valor <= 0) {
            echo "O valor a depositar deve ser positivo!";
        } else {
            $this->saldo += $valor;
            echo "Depósito realizado com sucesso." . PHP_EOL;
        }
    }

    public function transferir(float $valorATransferir, Conta $conta)
    {
        if ($valorATransferir < $this->saldo) {
            echo "Saldo indisponível" . PHP_EOL;
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

$conta = new Conta();
$segundaConta = new Conta();
$conta->transferir(100, $segundaConta);
echo $conta->visualizarSaldo();
