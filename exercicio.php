<?php
session_start();
if(!$_SESSION['usuario']) { // criando uma condição para verificar se o uruario está logado
    header('Location: login.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="<?="/{$_GET['dir']}/{$_GET['file']}.php"?>" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include("basico/ola.php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); //Comando pra preencher esta div com outro arquivo html
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y');?>
    </footer>
</body>
</html>