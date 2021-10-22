<div class="titulo">Operações Aritiméticas</div>


<?= 1 + 1, '<br>'; 
var_dump(1 + 1.0); // Comando para verificar o tipo da variável
echo '<br>';
echo 1 + 1.5, '<br>';
echo 10 - 1, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7,4), '<br>'; // Essa funçõa retira as casas decimais do resultado de uma divisão
echo round(7 / 4), '<br>'; // Essa função aredonda o resultado de uma divisão
echo 7 % 4, '<br>'; // Essa função mostra o resto da divsão
// echo 7 / 0, '<br>';
echo 4 ** 2, '<br>';
echo '<p>--------------------</p>';

// Precedência de operadores
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>'
?>