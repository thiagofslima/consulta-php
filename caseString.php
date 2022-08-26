<?php

$nomeMinusculo = 'thiago lima';
$nomeMaiusculo = 'THIAGO LIMA';

echo lcfirst($nomeMaiusculo.PHP_EOL); //tHIAGO LIMA
echo ucfirst($nomeMinusculo.PHP_EOL); //Thiago lima
echo ucwords($nomeMinusculo.PHP_EOL); //Thiago Lima
echo strtolower($nomeMaiusculo.PHP_EOL); //thiago lima
echo strtoupper($nomeMinusculo.PHP_EOL); //THIAGO LIMA
echo strtoupper("construção".PHP_EOL); //CONSTRUçãO.
//strtoupper não converte caracteres complexos (ç, ã, õ, é, á, ...), sendo necessário usar mb_strtoupper
//Nota: a função mb_strtoupper faz parte de uma biblioteca do PHP que talvez precise ser habilitada. Para isso, você precisará acessar o arquivo php.ini no diretório em que o PHP foi instalado. Nesse arquivo, busque (atalho "Ctrl + F") por "mbstring" e retire o ponto e vírgula (;) que vem antes de "extension=mbstring". Em seguida, busque por "extension_dir" e retire o ponto-e-vírgula antes da linha "extension_dir = "ext".
echo mb_strtoupper('construção'.PHP_EOL);
echo mb_strtoupper("construção", 'UTF-8'); //Passa como segundo parametro o encoding
echo mb_internal_encoding().PHP_EOL; //Verificar qual encoding está sendo usado
echo extension_loaded('mbstring'); //Se o resultado for 1 a extensão mbstring está ativada, se não retornar nada a mbstring não está ativada