<?php

//Array Associativo
$conta = [
    'titular' => 'Thiago',
    'saldo' => 1500
];

//Resultado: 
//Thiago
//1500
foreach ($conta as $value) {
    echo $value.PHP_EOL;
}
echo PHP_EOL;
//Modo com mais recursos. Usando {} nas variáveis não precisa fazer concatenação
//Resultado:
//titular: Thiago
//saldo: 1500
foreach ($conta as $key => $value) {
    echo "{$key}: {$value}".PHP_EOL;
}
echo PHP_EOL;


$semIndice = ['Thiago', 'Fernando'];
echo $semIndice[1]; //Resultado: Fernando
echo PHP_EOL; echo PHP_EOL;


//Array multidimensional - Ícone único
$carros = [
    'ZZZ-1234' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ]
];
foreach ($carros as $placa => $carro) {
    echo $carro['modelo']; //Resultado: Uno
}
echo PHP_EOL; echo PHP_EOL;

//Pegando índice de um Array Multidimensional
foreach ($carros as $carro) {
    foreach ($carro as $key => $value) {
        echo $key.PHP_EOL;
    }
}
