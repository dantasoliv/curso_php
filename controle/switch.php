<div class="titulo">Switch</div>

<?php
$categoria = 'Sedan';
$preco = 0.0;
$carro = '';

if($categoria === 'luxo'){
    $carro = 'Mercedes';
    $preco = 250000;
}else if($categoria === 'SUV'){
    $carro = 'Renegade';
    $preco = 80000;
}else if($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55000;
}else{
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.'); // * Formatento preço
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";
echo '<hr>';

$categoria = 'suv básico';

// Switch
switch(strtolower($categoria)){
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 2500000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.'); // * Formatanto preço
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";