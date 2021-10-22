<div class="titulo">Funções Anônimas</div>

<?php

$soma = function($a, $b) { // * declarando uma funçõa anonima
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

// * Função dentro de outra função
function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(1, 2, '+', $soma);

$multiplicao = function($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicao);

$divisao = function ($a, $b) {
    return $a / $b;
};

executar(9, 3, '/', $divisao);