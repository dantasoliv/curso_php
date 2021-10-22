<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="POST">
    <div>
        <label for="linhas">Linhas:</label>
        <input type="number" name="linhas" value= <?= $_POST['linhas'] ?? 10 ?> id="linhas"> <!--Comando ?? coloca um valor padrão se não houver newnhum valor no campo-->
    </div>
    <div>
        <label for="colunas">Colunas:</label>
        <input type="number" name="colunas" value= <?= $_POST['colunas'] ?? 10 ?> id="colunas">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
    if(isset($_POST['linhas']) && isset($_POST['colunas'])) { // * a função isset converte valor idefinido para valor boleano

        // * A funcção intval conerte strint para interiro
        $linhas =  intval($_POST['linhas']); 
        $colunas =  intval($_POST['colunas']);
        $num = 1;
        for($i = 0; $i < $linhas; $i++) {
            echo "<tr>";
            for($j = 0; $j < $colunas; $j++) {
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }
    }

    ?>
</table>

<style>
    form button{
        margin-top: 10px;
        border: 0;
        padding: 5px;
        font-size: 1.2rem;
        background-color: #424242;
        color: #fff;
    }
    form button:hover{
        cursor: pointer;
        background-color: #212121;
    }

    form div{
        margin: 0;
    }

    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding: 10px 20px;
    }

</style>