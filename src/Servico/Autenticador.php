<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "OK. Usuário logado no sistema.";
        } else {
            echo "Ops. Senha incorreta.";
        }
    }
}