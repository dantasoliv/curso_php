<?php namespace App; // Definindo um namespace ?>
<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>'; // exibindo o nome do namespace
const constante = 123;
echo constante . '<br>'; // Acesaando a constante dentro do namespace App

namespace App\Principal; // Criando um sub-namespace
echo __NAMESPACE__ . '<br>';
const constante = 234;
echo constante . '<br>'; // Acesaando a constante dentro do namespace App\Principal

namespace App\Principal\Espesifico;
echo __NAMESPACE__ . '<br>';
const constante = 345;
echo constante . '<br>'; // Acesaando a constante dentro do namespace App\Principal\Espesifico
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>'; // Acesaando a constante dentro do namespace App\Principal\Espesifico

echo \App\constante . '<br>'; // Acessando a constante dentro do namespace App
echo \App\Principal\constante . '<br>'; // Acesaando a constante dentro do namespace App\Principal
echo \App\Principal\Espesifico\constante . '<br>'; // Acesaando a constante dentro do namespace App\Principal\Espesifico