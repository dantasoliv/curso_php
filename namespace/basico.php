<?php namespace contexto;  // Definindo um namespace ?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>'; // Acesando o nome do namespace
const constante1 = 123; // Definindo uma constante
define('contexto\constante2', 234); // Definindo uma constente com define
define(__NAMESPACE__ . '\constante3', 345); // Outra forma de definir uma constante com define
define('outro_contexto\constante4', 456); // Definindo uma constante de outro namespace que ainda não existe

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>';
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

$soma =  soma(3, 3);
echo $soma . '<br>';
echo \contexto\soma(1, 1) . '<br>'; // Acessando a função usando o caminho do namespace

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto gnérico para busca', 'busca') . '<br>';