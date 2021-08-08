<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$indice = array_rand($nomes); // Seleciona um indice alaeatori de uma array
echo "<div center><h1>$nomes[$indice]</h1></div>" // exibe o valor sorteado da array

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>