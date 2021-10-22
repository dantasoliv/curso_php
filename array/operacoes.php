<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A"; // * Adicionando um novo indice com um valor na array

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // Comando para verificar se a variável é uma array
echo '<br>' . count($dadosCompletos); // Comando para verificar quantos elementosa tem na array

echo '<br>';
$indice = array_rand($dadosCompletos); //  Gerando  um indice randomico
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo "${dadosCompletos['idade']}";


unset($dadosCompletos["nome"]); // Remove um inide da array
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // limpa a variável
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // Juntando arrays
echo '<br>';
print_r($decimais);

sort($decimais); // Ordena uma aaary por ordem crescente
echo '<br>';
print_r($decimais);
