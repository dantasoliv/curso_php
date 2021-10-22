<div class="titulo">Desafio Tabela 1</div>

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach($matriz as $linha){
    foreach($linha as $valor){
        echo "$valor ";
    }
    echo "<br>";
}

echo "<hr>";
echo "Tabela usando estrutura de repetição Foreeach";
?>

<!--Tabela usando a estrurura de reretição Foreach-->
<table>
<?php
foreach($matriz as $linha) {
    echo "<tr>";
    foreach($linha as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
?>
</table>
<hr>

<!--Tabela colorida usando Foreach e If-->
<p>Tabela colorida usando Foreach e If</p>
<table>
    <?php
        foreach($matriz as $index => $linha){
            $style = $index % 2 === 1 ? 'background-color: lightblue;' : '';
            echo "<tr style = '{$style}'>";
            foreach($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<!--Exemplo de estrutura de Tabela HTML5-->
<table>
<tr><!--tr é a lina da tabela-->
<td>Trompete</td><!--td é a coluna da tebala-->
<td>Trombone</td>
</tr>
<tr>
<td>Trompa</td>
<td>Tuba</td>
</tr>
</table>


<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding: 10px 20px;
    }
</style>