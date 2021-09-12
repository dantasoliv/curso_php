<?php
echo 'Carregando: include_once_arquivo <br>';

$variavel = 'Estou definida';


if(!function_exists('soma')) { // Verificando se a função já existe
    function soma($a, $b){
        return $a + $b;
    }
}
