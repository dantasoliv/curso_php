<div class="titulo">Função & Escopo</div>

<?php
//  * Criando uma Função
function imprimirMensagem() {
    echo "olá! ";
    echo "Até a próxima! <br>";
}

// * Chamando uma função
imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1; // ! variavel de escopo global pode ser acessada em todo o código
function trocaValor(){
    $variavel = 2; // ! variavel de escopo local dentro da função só pode ser usada dentro da função
    echo "Durante a função: $variavel <br>";
}
echo "<hr>";
echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade() {
    global $variavel; // ! Acessando uma variavel de escopo glibal dentro de uma função
    $variavel = 3; // ! Atribuindo valor na variavel globaL dentro da função
    echo "Durante a função: $variavel <br>";
}

echo "<hr>";
echo "Antes $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());