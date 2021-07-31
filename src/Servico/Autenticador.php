<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Contrato\AutenticavelInterface;

class Autenticador
{
    public function tentaLogin(AutenticavelInterface $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "OK. Usuário logado no sistema." . PHP_EOL;
        } else {
            echo "Ops. Senha incorreta." . PHP_EOL;
        }
    }
}