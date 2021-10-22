<div class="titulo">Foreeach</div>

<?php
$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach($array as $valor) {
    echo "$valor <br>";
};

echo '<hr>';

foreach($array as $indice => $valor) {
    echo "$indice => $valor <br>";
};

echo '<hr>';

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matriz as $linha) {
    foreach($linha as $letra) {
        echo "$letra ";
    }
    echo "<br>";
};

echo '<hr>';

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}
echo '<hr>';
print_r($numeros);