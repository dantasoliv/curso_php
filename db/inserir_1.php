<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php"; // importanto o arquivo de conexão com o banco de dados

// Inserindo registro na tabela
$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Joana Oliveira',
        '1975-02-14',
        'Joana_oliv@email.com.br',
        null,
        2,
        1100.80
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) { // verificando se a conexão com o o banco teve sucesso
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();

