<?php

namespace Alura\Banco\Modelo;

class NomeCurtoException extends \RuntimeException
{
    /**
     * @param string $nome
     */
    public function __construct()
    {
        $message = "Nome do titular está curto. O sobrenome é obrigatório.";
        parent::__construct($message);
    }
}
