<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() { // Criando um método com o modificador final // classe ou método com o modificador final não pode ser herdado e modificado
        echo 'Não vou mudar! <br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando método 1 <br>';
    }

    //public function metodo2() {
    //    echo 'Extendento método 2 <br>';
    //}
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica { // Criando uma classe com o modificador  final
    public $attr = 'Valor Único<br>';
}

$unica = new Unica();
echo $unica->attr;

//class Duplicata extends Unica {
//    public $att2;
//}

