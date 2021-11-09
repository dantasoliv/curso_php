<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php"; // importanto o arquivo de conexão com o banco de dados

// Criando uma tabela no banco de dados
$sql = "CREATE TABLE  IF NOT EXISTS cadastro ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) { // verificando se a conexão com o o banco teve sucesso
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();