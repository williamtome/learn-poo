<?php

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->validaCpf($numero);
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    private function validaCpf(string $numero): void
    {
        if (strlen($numero) < 11) {
            echo "CPF incorreto.";
            exit();
        }

        $this->numero = $numero;
    }
}
