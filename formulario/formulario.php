<!--Link Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php
if (count($_POST) > 0) { // Verificando se o formulario está preenchido
    // if(isset($_POST['nome'])) - Outra forma de verificar se o campo está prenchido

    $erros = []; // Arrray com os erros

    if(!filter_input(INPUT_POST, "nome")) { // verificando se  o campo nome está preenchido
        $erros['nome'] = 'Nome é obrigatŕrio';
    }

    if(filter_input(INPUT_POST, "nascimento")) { // Verificando se a data está no padrão dd/mm/aaa
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data) {
            $erros['nascimento'] =  'Data deve estar no padrão dd/mm/aaa';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ // Verificando se o e-mail está no formato correto
        $erros['email'] =  'E-mail inválido';
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) { // Verificando se o site está no formato correto
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = ["options" =>["min_range"=> 0, "max_range"=> 20]]; // Verificanso se a quantidade de filhos está dentro do range
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) {
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salarioConfig = ["options" => ['decimal' => ',']]; // Verificando se o salário tem separação de casa decimal com virgula
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] =  'Salário inválido';
    }

    if(count($erros) > 0) { // Verificando se existe erros no formulário
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

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' // verificando se o campo tem erro ?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div> <!--Mostrando o erro no campo individualmente-->
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtde de filhos" value="<?= $_POST['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>"" id="salario" name="salario" placeholder="Salário" value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg" >Enviar</button>
</form>