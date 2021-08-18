<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

//$soma1 = 1;
//echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

function soma2($a, $b) {
    return $a + $b;
}

echo soma2(2, 3) . '<br>';
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1); 