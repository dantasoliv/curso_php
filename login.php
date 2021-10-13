<?php
session_start(); // inicializando uma sessão

$email = $_POST['email']; // coletando o email do formulário
$senha = $_POST['senha']; // coletando a senha do formulário

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "654321",
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30; // cirando tempo de expiração do cookie
            setcookie('usuario', $usuario['nome'], $exp); // criando um cookie, cookie serve para manter o uruario logado mesmo se o navegador for encerrado
            header('Location: index.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usúario/Senha inváido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= include('template/head.php') ?>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem Vindo</h2>
    </header>
    
    <main class="principal">
        <div class="conteudo">
            <h3>Identifiqui-se</h3>
            <?php if($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="POST">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        <?= include('template/footer.php')?>
    </footer>
</body>
</html>