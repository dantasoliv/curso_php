<div class="titulo">Primeira Calasse</div>

<?php
class Cliente { // Comando para criar um classe
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    // Metodos
    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}"; // Acessando a variavel do objeto dentro da função da classe
    }
}

// Criando um objeto da classe Cliente
// Objeto = Instância
$c1 = new Cliente();
$c1->nome = 'Ana Silva'; // Atribuindo uma informação no atributo 
$c1->idade = 27.5;
echo $c1->apresentar(), '<br>'; // execuanto um metodo da classe
echo $c1->nome, '<br>'; // Acessando um atributo

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;
echo $c2->apresentar(), '<br>';