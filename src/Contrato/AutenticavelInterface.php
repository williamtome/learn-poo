<?php

namespace Alura\Banco\Contrato;

interface AutenticavelInterface
{
    public function podeAutenticar(string $senha): bool;
}
