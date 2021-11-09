<!--Link Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php

require_once "conexao.php"; // importanto o arquivo de conexão com o banco de dados

// Selecionando registros no banco de dados

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = []; // array que vai receber o resultado da consulta no banco de dados

if($resultado->num_rows > 0){ // verificando se a consulta tem resultado e inserindo oo resultado da consulta na array $registros
    while($row = $resultado->fetch_assoc()) {
        $registros [] = $row;
    }
}elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}

 // print_r($registros); // exibindo a array com o resultado da consulta no banco de dados

$conexao->close();

?>

<!--Tabela para exibir o resultado da consulta no banco de dados-->
<table class="table table-hover table-striped table-bordered">
    <thead>
        <!--Cabeçalho da tabela-->
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <!--Corpo da tabela-->
    <tbody>
        <!--Laço de repetição foreach para preencher a tabela com o resultado da consulta no banco de dados-->
        <?php foreach($registros as $registro): ?>
            <tr> <!--Linha da tabela-->
                <td><?= $registro['id'] ?></td><!--Registro da linha da tabela-->
                <td><?= $registro['nome'] ?></td>
                <td>
                    <?=
                        // exibindo a data de nascimento no formato d/m/a
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
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