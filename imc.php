<?php

$peso = 70;
$altura = 1.80;
$imc = $peso / $altura ** 2;

echo "Seu IMC é $imc, você está ";

if ($imc < 17) {
    echo "abaixo do peso";
} elseif ($imc >= 18 || $imc <=25) {
    echo "no peso ideal";
} else {
    echo "acima do peso";
}