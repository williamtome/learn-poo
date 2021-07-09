<?php

class Conta
{
    private string $cpfTitular;
    private string $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $titular, string $cpf)
    {
        $this->validaNomeTitular($titular);
        $this->cpfTitular = $cpf;
        $this->saldo = 0;
        self::$numeroDeContas++;
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
        return "Titular: {$this->titular} CPF: {$this->cpfTitular} Saldo: R$ {$this->saldo}" . PHP_EOL;
    }

    private function validaNomeTitular(string $titular)
    {
        if (str_word_count($titular) == 0) {
            echo "Informe o nome do titular." . PHP_EOL;
            exit();
        }

        if (str_word_count($titular) == 1) {
            echo "Informe o sobrenome do titular." . PHP_EOL;
            exit();
        }

        $this->titular = $titular;
    }

    public static function mostrarTotalDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
