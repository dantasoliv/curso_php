<div class="titulo">Operadores Lógicos</div>

<?php 
echo "<p class='divisao'>Negação Lógica Opedador NOT '!'</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // O operador NOT - ! inverte a lógica, verdadeiro vira falseo e falso vira verdaeiro 
echo '<br>';
var_dump(!!true); // Usar o opedador NOT - !! volta a lógica inicial verdaeiro ou falso

echo "<p class='divisao'>Tabela Verdade Operador 'AND' ou '&&'</p><hr>"; // Também pode usar 'AND' no lugar de '&&'
var_dump(true && 1 == 1); // verdadeiro + verdasdeiro = Verdadeiro
echo '<br>', var_dump(true and false); // verdadeiro + falso = Falso
echo '<br>', var_dump(false && true); // falso + verdadeiro = Falso
echo '<br>', var_dump(false && false); // falso + falso = Falso
// Só e verdadeiro quando as duas condições são verdadeiras

echo "<p class='divisao'>Tabela Verdade Opedador 'OR' ou '||'</p><hr>"; // Também pode usar '||' no lugar de '&&'
var_dump(true or true); // verdadeiro + vrdadeiro = verddeiro
echo '<br>', var_dump(true || false); // verdadeiro + falso = Verdadeiro
echo '<br>', var_dump(false or true); // falso + verdadeiro = Verdadeiro
echo '<br>', var_dump(false or false); // falso + falso = Falso
// Só é verdsdeiro quando uma ou todas as condições são verdadeiras

echo "<p class='divisao'>Rabela Verdade Opedador 'XOR' (OU Exclusivo)</p><hr>"; // Támbem pode usar o operador !=
var_dump(true xor true); // verdadeira + verdadeiro = Falso
echo '<br>', var_dump(true xor false); // verdadeiro + falso = Verdeiro
echo '<br>', var_dump(false xor true); // falso + verdadeiro = Verdadeiro
echo '<br>', var_dump(false xor false); // falso + falso = Falso
// Só é verdadeiro quando apenas uma das condições é verdadeira

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

$pagouPrevidencia = true;
$critreriHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 62 && $sexo === 'F');
$atingiuCriterio = $criterioMulher || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

echo "Pode se aposentar -> $podeSeAposentar". '<br>';

if($idade >= 62 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}else if($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
}else{
    echo 'Vai ter que trabalhar mais um pouco...';
}

