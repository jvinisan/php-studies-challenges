<?php

// Criando uma lista de multiplos de dois
$multiplosDois = [2, 4, 6, 8, 10, 12];

// Selecionando índices especificos
[$dois, $quatro, $seis] = $multiplosDois;

// Testando o unset com a primeira posição da lista
unset($multiplosDois[0]);

foreach ($multiplosDois as $dobro) {
    echo "O número é {$dobro}" . PHP_EOL;
}

echo "Os números selecionados foram $dois, $quatro e $seis" . PHP_EOL;
