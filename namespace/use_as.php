<?php namespace Outro\Nome; // Definindo um namespace ?>
<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b;
}

echo soma(1, 1) . '<br>'; // usando a função soma do namespace do arquivo atual
echo \Nome\Bem\Grande\soma(1, 1) . '<br>'; // usando a função soma do namespace do arquivo use_as_arquivo.php

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;
echo constante . '<br>';

use \Nome\Bem\Grande as ctx; // usando o namspace Nome\Bem\Grande com o apelido ctx

echo soma(1, 2) . '<br>';
echo ctx\soma(1, 2) . '<br>'; // acessando a função soma do namesoace Nome\Bem\Grande com o apelido ctx

//use Nome\Bem\Grande\Classe\soma;
use function \Nome\Bem\Grande\soma as somaReal; // acessando a função soma do namesoace Nome\Bem\Grande com o apelido da função somaReal
echo somaReal(100, 212) . '<br>';

$a = new Classe(); // instanciando a classe da namespace atual
$a->func();

$b = new \Nome\Bem\Grande\Classe();  // instanciando a classe do namespace \Nome\Bem\Grande
$b->func();

$c = new ctx\Classe(); // instanciando a classe do namespace \Nome\Bem\Grande usando o apelido ctx
$c->func();

use \Nome\Bem\Grande\Classe as d;
$d = new d(); // instanciando a classe do namespace \Nome\Bem\Grande com o apelido d
$d->func();