<!--Link Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) { // Verificando se o formulario está preenchido
    // if(isset($_POST['nome'])) - Outra forma de verificar se o campo está prenchido
    if(!filter_input(INPUT_POST, "nome")) { // verificando se  o campo nome está preenchido
        echo 'Nome é obrigatŕrio', '<br>';
    }

    if(filter_input(INPUT_POST, "nascimento")) { // Verificando se a data está no padrão dd/mm/aaa
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data) {
            echo 'Data deve estar no padrão dd/mm/aaa', '<br>';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ // Verificando se o e-mail está no formato correto
        echo 'E-mail inválido', '<br>';
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) { // Verificando se o site está no formato correto
        echo 'Site inválido', '<br>';
    }

    $filhosConfig = ["options" =>["min_range"=> 0, "max_range"=> 20]]; // Verificanso se a quantidade de filhos está dentro do range
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        echo 'Quantidade de filhos inválida', '<br>';
    }

    $salarioConfig = ["options" => ['decimal' => ',']];
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        echo 'Salário inválido', '<br>';
    }

}

?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de filhos</label>
            <input type="number" class="form-control" id="filhos" name="filhos" placeholder="Qtde de filhos" value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário" value="<?= $_POST['salario'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg" >Enviar</button>
</form>