<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel(): void
    {
        $valorDeAumento = $this->recuperaSalario() * 0.75;
        $this->recebeAumento($valorDeAumento);
    }
}
