<div class="titulo">Upload</div>

<?php
print_r($_FILES);

if($_FILES && $_FILES['arquivo']) { // validando o envio do arquivo
    $pastaUpload = '/home/daniel/Documentos/Daniel/Cursos/Cursos Udemy/PHP7/';
    $nomeArquivo = $_FILES['arquivo'] ['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo'] ['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
    } else {
        echo "<br>Erro no upload do arquivo!";
    }
}

?>

<!--Formulário para envio de arquivo-->
<form action="#" method="POST" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>