<div class="titulo">PDO: Alterar</div>

<?php

require_once "conexao_pdo.php"; // importanto o arquivo de conexão com o banco de dados

// Código sql para atualizar um registro no banco de dados
$sql = "UPDATE cadastro 
SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
WHeRE id = ?";

$conexao = novaConexao(); // estabelecendo conexão com o banco de dados
$stmt = $conexao->prepare($sql); // tratamento conta ataques de sql injection

$resultado  = $stmt->execute([ // informações inswridas no código sql
    'Gui',
    '1980-12-12',
    'qui@gui.com.br',
    'http://gui.com.br',
    1,
    1200,
    12
]);

if($resultado) { // Verificando se o código sql teve sucesso ou não
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}
