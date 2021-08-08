<div class="titulo">Multidimensionais</div>

<?php
$dados = [ // * Criando uma array multidimencipnal
    [ // * indice 0
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [ // * indice 1
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia",
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [ // * Adicionando um novo indice na array
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do Mexico"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);