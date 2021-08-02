<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo() . PHP_EOL;
    }

    public function __set(string $nomeAtributo, $valor)
    {
        $this->$nomeAtributo = $valor;
    }
}
