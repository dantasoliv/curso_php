<div class="titulo">Visibilidade</div>

<?php
class A {
    // Atributos
    public $publico = 'Publico'; // Atributo Publico - pode usado diretamente no objeto ao instanciar
    protected $protegido = 'Protegido'; // Atributo Protegido - pode ser usado apneas por herança de classes em um método
    private $privado = 'Privado'; // Atributo Privado - pode ser usado anpnas dentro da própria classe

    // Métodos
    public function mostrarA() { //  Método Publico - pode ser usudo diretamente no objeto ao instanciar
        // $this->naoMostrar(); // Importando o método prvado da classe dentro do método publico 
        echo "Clas A) Publico = {$this->publico} <br>";
        echo "Clas A) Protegido = {$this->protegido} <br>";
        echo "Clas A) Privado = {$this->privado} <br>";
    }

    protected function vaiPorHeranca() { // Método Protegido - pode ser usado apneas por herança de classes dentro de um método
        echo 'Serei transmitido por herança';
    }

    private function naoMostrar() { // Método Privado - pode ser usado anpnas dentro da própria classe
        echo 'Não vou imprimir! <br>';
    }
}

echo 'Objeto A <br>';
echo "<hr>";

// Instanciando 
$a = new A; // Criasndo um Objeto da classe A
$a->mostrarA();
// $a->naoMostrar();

echo '<br>';
echo 'Objeto B';
echo "<hr>";

class B extends A { // Criando a classa B com herança da Classe A
    public function mostrarB() {// Mtétodo 
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido} <br>";
        // echo "Class B) Privado = {$this->privado} <br>";
        parent::vaiPorHeranca(); // Importando um método da classe pai
    }
}

// Instanciando
$b = new B; // Criando um objeto da classa B
$b->mostrarB();
// $b->vaiPorHeranca();