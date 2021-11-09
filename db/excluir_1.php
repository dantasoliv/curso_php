<div class="titulo">Excluir Registos #01</div>

<?php

require_once "conexao.php"; // importanto o arquivo de conexão com o banco de dados

//Deletando registro do banco de dados
$sql = "DELETE FROM cadastro WHERE id = 3";

//Criando conexão com o bando de dados
$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) { // verificando se a conexão com o o banco teve sucesso
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close(); // fechando conexão com o bando de dados
