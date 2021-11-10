<!--Link Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Registro</div>

<h2>Atualizar</h2>

<?php

require_once "conexao.php"; // importanto o arquivo de conexão com o banco de dados
$conexao = novaConexao(); // Criando coneção com o banco de dados

// fazendo um select no banco de dados e preenchendo o formulário com o resultado do select
if($_GET['codigo']) {
    $sql = "SELECT * FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $_GET['codigo']);

    if($stmt->execute()) {
        $resultado = $stmt->get_result();
        if($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
            if($dados['nascimento']) {
                $dt = new DateTime($dados['nascimento']);
                $dados['nascimento'] = $dt->format('d/m/Y');
            }
            if($dados['salario']) {
                $dados['salario'] = str_replace(".", ",", $dados['salario']); // função para substituir . por ,
            }
        }
    }
}

if (count($_POST) > 0) { // Verificando se o formulario está preenchido
    // if(isset($_POST['nome'])) - Outra forma de verificar se o campo está prenchido

    $dados = $_POST;
    $erros = []; // Arrray com os erros

    if(trim($dados['nome']) === "") { // verificando se  o campo nome está preenchido
        $erros['nome'] = 'Nome é obrigatŕrio';
    }

    if(isset($dados['nascimento'])) { // Verificando se a data está no padrão dd/mm/aaa
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if(!$data) {
            $erros['nascimento'] =  'Data deve estar no padrão dd/mm/aaa';
        }
    }

    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){ // Verificando se o e-mail está no formato correto
        $erros['email'] =  'E-mail inválido';
    }

    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) { // Verificando se o site está no formato correto
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = ["options" =>["min_range"=> 0, "max_range"=> 20]]; // Verificanso se a quantidade de filhos está dentro do range
    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salarioConfig = ["options" => ['decimal' => ',']]; // Verificando se o salário tem separação de casa decimal com virgula
    if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] =  'Salário inválido';
    }

    if(!count($erros)) { // Verificando se existe erros no formulário
        // Conexão com banco de dados para inserir as indormações do formulário no banco de dados
        // Atualizando dados do formuário no banco de dados
        // Evitando ataques de SQL injection
        $sql = "UPDATE cadastro
        SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
        WHERE ID = ?";

        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario'] ? str_replace(",", ".", $dados['salario']) : null,
            $dados['id'],
        ];

        $stmt->bind_param("ssssidi", ...$params);

        if($stmt->execute()) { // executando a insersão das informações do formulário no banco de dados e em seguida limpando o formulário
            unset($dados);
        }

    }else{
        echo '<div class="alert alert-danger" role="alert">
                Existem erros no formulário
            </div>';
    }

}

?>

<?php foreach($erros as $erro): ?> <!--Mostrando todos os os erros-->
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= "" //$erro ?>
    <!-- </div> -->
<?php endforeach ?>

<form action="/exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="alterar">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" name="codigo" value="<?= $_GET['codigo'] ?>" placeholder="Informe o código para consulta" class="form-control">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Consultar</button>
        </div>
    </div>
</form>

<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' // verificando se o campo tem erro ?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div> <!--Mostrando o erro no campo individualmente-->
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $dados['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $dados['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtde de filhos" value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>"" id="salario" name="salario" placeholder="Salário" value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg" >Enviar</button>
</form>