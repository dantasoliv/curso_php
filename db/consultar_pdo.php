<div class="titulo">PDO: Consultar</div>

<?php

require_once "conexao_pdo.php"; // importanto o arquivo de conexão com o banco de dados

$conexao = novaConexao(); // estabelecendo conexão com o bando de dados
$sql = "SELECT * FROM cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo "<hr>";

// Código de seleção no bando de dados
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

// tratamento contra ataques de sql injection
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

if($stmt->execute()) { // verificando se o código sql foi executado oe se teve erro
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

// select no banco de dados com tratamente contra ataques de sql injection
$sql = "SELECT * FROM cadastro WHErE id = :id";
$stmt = $conexao->prepare($sql);
//$stmt->bindValue(':id', 2);
//if($stmt->execute([1])) {
//if($stmt->execute()) {

if($stmt->execute([':id' => 2])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close(); // encerrando conexão com o banco de dados
