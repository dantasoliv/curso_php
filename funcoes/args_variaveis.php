<div class="titulo">Agumentos Variáveis</div>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(5, 5, 2, 3) . '<br>';
echo soma(6, 5, 7, 8) . '<br>';

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5) . '<br>';

$array = [6, 7, 8];
echo somaCompleta(...$array) . '<br>';

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependentes: $dep <br>";
        }
    }
}

membros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo '<br>';
membros("Roberto", "Junior");