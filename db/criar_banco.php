<div class="titulo">Criar Banco</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php'; // criando um banco da dados

$resultado = $conexao->query($sql);

if ($resultado) { // verificando se a conexão com o o banco teve sucesso
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();