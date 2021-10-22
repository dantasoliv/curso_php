<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância'; // Atributo não estático pertence ao objeto (instância)
    public static $static = 'Variável de classe (estática)'; // Atributo estático é uma constante que pertence somente a classe e não ao objeto (instância)

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic} <br>";
        // Tentativa 1
        // echo "Estática = {$this->static} <br>";
        echo "Estática = " . self::$static . "<br>"; // Acessando o atributo estático da classe
    }

    // Função (método)  estático
    public static function mostrarStaticA() {
        //echo "Não estática = {$this->naoStatic} <br>";
        echo "Estática = " . self::$static . "<br>"; // Acessando o atributo estático da classe no método estático da classe
    }
}

$objeto = new A();
$objeto->mostrarA();
$objeto->mostrarStaticA(); // Acessando método estático da classe com instância (não é a forma ideal de acessar ométodo estático da classe)
A::mostrarStaticA(); // Acessando método estático diretamente pela classse sem instânciar a mesma
echo A::$static, '<br>'; // Acessando atributo stático diretamente pela classe sem instânciar a mesma

A::$static = 'Alterado membro de classe!'; // Acessando e alterando o atributo stático diretamente pela classe sem instânciar a mesma
echo A::$static; 