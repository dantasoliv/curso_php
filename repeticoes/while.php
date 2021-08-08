<div class="titulo">While / Do While</div>

<?php
// While - Primeiro verifica se a condição é verdadeira e depois executa o bloco.
// Enquanto a condição for verdadeira executa o bloco de código.
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}

echo "<hr>";
// Do While - Primeiro executa o codigo e depois verifica a condição.
// A condição vem depois do bloco de código
const VALOR_LIMITE2 = 5;
$contador = 0;

do {
    echo "Do While $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMITE2);

echo "<hr>";
// Loop infinito com While e break
$contador = 0;
while(true) {
    echo "While(true) $contador <br>";
    $contador ++;
    if($contador >=VALOR_LIMITE2) break;
}