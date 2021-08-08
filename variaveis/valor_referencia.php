<div class="titulo">Valor vs Referência</div>

<?php

// Atribuição por Valor
$variavel = 'valor inicial';
echo $variavel;

$variavelvalor = $variavel;
echo "<br> $variavelvalor";
$variavelvalor = 'outro valor';
echo "<br> $variavelvalor";

// Atribuição por Referência
$variavelReferencia = &$variavel;
echo "<br> $variavelReferencia"; // O & faz uma atribuição por referência
$variavelReferencia = 'mesma referência';
echo "<br> $variavel";
echo "<br> $variavelReferencia";
