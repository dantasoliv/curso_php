<div class="titulo">PDO: Excluir</div>

<?php

require_once "conexao_pdo.php"; // importanto o arquivo de conexão com o banco de dados

$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao = novaConexao(); // criando conexão com o banco de dados
$stmt = $conexao->prepare($sql);

if($stmt->execute([9])) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}


