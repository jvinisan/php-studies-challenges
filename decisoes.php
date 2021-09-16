<?php

$idade = 17;
$numeroDepessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos e esteja acompanhado". PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
} elseif ($idade >=16 || $numeroDepessoas > 0) {
    echo "Você tem $idade anos, está acompanhado, então pode entrar";
} else {
    echo "Você não pode entrar";
}

echo PHP_EOL;
echo "Até mais. :)";