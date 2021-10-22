<?php
echo 'Carregando: incliude_arquivo <br>';

$variavel = 'Estou definida';

if(!function_exists('soma')) { // Verifinanco se a função existe
    function soma($a, $b) {
        return $a + $b;
    }
}
