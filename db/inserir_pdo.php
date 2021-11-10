<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php"; // importanto o arquivo de conexão com o banco de dados

// inserindo informações no banco de dados
$sql = "INSERT INTO cadastro
(nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guikherme Filho',
    'guidagalera@gmail.com',
    '1998-7-21',
    'http://guidagalera.com.br',
    0,
    3000
)";

$conexao = novaConexao(); // estabelecendo conexão com o bando de dados

// print_r(get_class_methods($conexao)); // Função para cerificar os metodos de uma classe

if($conexao->exec($sql)) { // Verificando se  o código sql foi executado ou não
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}