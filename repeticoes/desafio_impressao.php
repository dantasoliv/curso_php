<div class="titulo">Desafio Impressão</div>

<!--
Enunciado:
- Imprima apenas os valores do array qwue contém indice par
- Desafio adicional: Resolver com for e foreach
- valores esperador: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];
print_r($array);

echo '<hr>';

echo "FOR <br>";

for($i = 0; $i < count($array); $i++ ) { 
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}

echo "<hr>";
echo "FOREACH <br>";

foreach ($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}