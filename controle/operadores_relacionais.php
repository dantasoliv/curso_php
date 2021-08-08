<div class="titulo">Operadores Relacionais</div>

<?php

echo  '<br>', var_dump(1 == 1); // Igual 
echo  '<br>', var_dump(1 > 1); // Maior
echo  '<br>', var_dump(1 >= 1); // Maior ou igual
echo  '<br>', var_dump(1 < 1); // Menor
echo  '<br>', var_dump(1 <= 1); // Menor ou Igual
echo  '<br>', var_dump(1 <> 1); // Diferente
echo  '<br>', var_dump(1 != 2); // Diferente
echo  '<br>', var_dump(1 === '1'); // Idêntico
echo  '<br>', var_dump(1 !== '1'); // Não Idêntico

echo "<p>Relacionais no IF/Else</p>";
echo "<hr>";

$idade = 15;

if($idade < 18){
    echo "Menor de idade = $idade anos!";
}else if($idade < 65){
    echo "Adulto = $idade anos!";
}else{
    echo "Terceira Idade = $idade anos!";
}

echo '<p>Spaceship</p><hr>';
var_dump(5 <=> 3);
echo '<br>', var_dump(5 <=> 5);
echo '<br>', var_dump(3 <=> 5);

echo '<p>Valores pode ser V ou F</p><hr>'; // Verfica se um valor -e verdadeiro ou falso
var_dump(!!5);
echo '<br>',var_dump(!!0);
echo '<br>',var_dump(!!"");
echo '<br>',var_dump(!!" ");

?>

<style>
    p{
        margin-top: 30px;
        margin-bottom: 0px;
    }
    hr{
        margin-top: 0px;
    }
</style>
