<?php

$conta = [
    'titular' => 'Thiago',
    'saldo' => 1500
];

//Usando {} nas variáveis não precisa fazer concatenação
//Resultado: 
//titular: Thiago
//sado: 1500
foreach ($conta as $key => $value) {
    echo "{$key}: {$value}".PHP_EOL;
}