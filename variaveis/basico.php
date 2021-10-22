<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';
echo isset($soma); // essa função verifica se a variável está setada

echo '<br>';
unset($soma); // esse função retira do valor setado na variável
echo isset($soma);
var_dump($soma); // essa função verifica o tipo da variável

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma String!";
echo '<br>' . $variavel;

// Nomes de variável
$var = "valida";
$var2 = "valida";
$VAR3 = "valida";
$_var_4 = "valida";
$vâr5 = "valida"; // evitar!
// $6var = "invalida";
// $%ar7 = "invalido";
// $var8% = "invalida";

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);