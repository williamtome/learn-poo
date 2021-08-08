<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
        echo 'Saindo da função 1' . PHP_EOL;
    } catch (Exception $excessao) {
        echo $excessao->getMessage() . PHP_EOL;
        echo 'Aconteceu um erro na função 2: ' . $excessao->getMessage() . PHP_EOL;
        echo 'na linha: ' . $excessao->getLine() . PHP_EOL;
        echo 'Trilha: ' . $excessao->getTraceAsString() . PHP_EOL;
    } catch (Error $error) {
        echo $error->getMessage() . PHP_EOL;
        echo $error->getLine() . PHP_EOL;
        echo $error->getTraceAsString() . PHP_EOL;
    }
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divisao = intdiv(5,0);
    throw new RuntimeException('Essa é a mensagem de excessao.');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
