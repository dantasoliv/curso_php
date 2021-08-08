<div class="titulo">Desafio PI</div>

<?php
echo pi(), '<br>';
$pi = 3.14;

/*
if ($pi === round(pi(), 2)){
    echo "Iguais!";
}else{
    echo "Diferentes";
}
*/

// Resposta
if ($pi - pi() <= 0.01){
    echo "Iguais!";
}else{
    echo "Diferentes";
}
