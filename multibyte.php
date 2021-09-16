<?php
// Alocando uma string na variável
$string = "Teste de integração com string";

// Descobrindo valores da string
$tamanho = mb_strlen($string);
echo $tamanho . PHP_EOL;

// Transformando string em maiúsculas
$maiuscula = mb_strtoupper($string);
echo $maiuscula. PHP_EOL;

// Convertendo o código da linguagem
$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $convertida . PHP_EOL;

// Exibir apenas as primeiras letras maiúsculas
$titulo = mb_convert_case($string, MB_CASE_TITLE);
echo $titulo . PHP_EOL;
