<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];

array_push($dados, 'daniel'); // * adicionando elementos na array
$dados["vinte"] = 'j'; // * adicionando um novo inidice com um elemento na array
$dados["vinte"] = 20; // * alterando os dados de de um indice da array
echo '<br>';
print_r($dados);