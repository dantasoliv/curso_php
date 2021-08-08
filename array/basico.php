<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);
$lista[0] = 1234; // * atribuindo um valor em um indice da array
echo '<br>' . $lista[0]; // * exibir conteudo de um indice da array
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];