<!--Link Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir Registos #02</div>

<?php
require_once "conexao.php"; // importanto o arquivo de conexão com o banco de dados
$conexao = novaConexao(); // criando conexão com o banco de dados
$registros = []; // array que vai receber o resultado da consulta no banco de dados

if($_GET['excluir']) { // verificando se o GET tem a chave excluir
    // Evitando ataques de SQL injection
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

// consultando o banco de dados
$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$resultado = $conexao->query($sql); // executando o comando sql que vai fazer a consulta no banco de dados

if($resultado->num_rows > 0){ // verificando se a consulta tem resultado e inserindo oo resultado da consulta na array $registros
    while($row = $resultado->fetch_assoc()) {
        $registros [] = $row;
    }
}elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}

$conexao->close(); // fechando conexão com o bando de dados

?>

<!--Tabela para exibir o resultado da consulta no banco de dados-->
<table class="table table-hover table-striped table-bordered">
    <thead>
        <!--Cabeçalho da tabela-->
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <!--Corpo da tabela-->
    <tbody>
        <!--Laço de repetição foreach para preencher a tabela com o resultado da consulta no banco de dados-->
        <?php foreach($registros as $registro): ?>
            <tr> <!--Linha da tabela-->
                <!--Registros das linhas da tabela-->
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td>
                    <?=
                        // exibindo a data de nascimento no formato d/m/a
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <!--Botão de excluir registro do banco de dados-->
                    <a href="exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>" class="btn btn-danger">Exckuir</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<!--Estilo da tabela-->
<style>
    table * {
        font-size: 1.2rem;
    }
</style>