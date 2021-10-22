<div class="titulo">Atribuições</div>

<?php
$title = "Atribuições";

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--; // $numero = $numero - 1
--$numero; // $numero = $numero - 1
echo '<br>' . $numero;
$numero++; // $numero = $numero + 1
++$numero; // $numero = $numero + 1
echo '<br>' . $numero;
$numero -=5; // $numero = $numero - 5
echo '<br>' . $numero;
$numero +=5; // $numero = $numero + 5
echo '<br>' . $numero;
$numero *=5; // $numero = $numero * 5
echo '<br>' . $numero;
$numero /= 2; // $numero = $numero / 2
echo '<br>' . $numero;
$numero %= 6; // $numero = $numero % 6
echo '<br>' . $numero;
$numero **= 2;  // $numero = $numero ** 2
echo '<br>' . $numero;
$numero .=4; // apenas concatenação
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

//$variaelInexistente = 'valor inexixtente';
//echo '<br>' . $variaelInexistente;
$valor = $variaelInexistente ?? 'valor default'; // atribui um valor padrão
echo '<br>' . $valor;