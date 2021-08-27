<div class="titulo">Herança</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa { // Criando a classe Pessoa

    //Atributos
    public $nome;
    public $idade;

    function __construct($nome, $idade) // Método Construtor
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct() // Método Desctrutor
    {
        echo 'Pessoa diz: Tchau!!';
    }
    
    // Método Normal
    public function apresentar() {
        echo "Nome: {$this->nome}, Idade: {$this->idade} anos <br>";
    }
}

// Criando a classe usuario que que herda da classe Pessoa
class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) // Método Construtor
    {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade); // Importando o método construtor da classe pai
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct() // Método Destrutor
    {
        echo 'Usuário diz: Tchau!! <br>';
        parent::__destruct(); // Importando o métodod destrutor da classe pai
    }

    public function apresentar() { // Método Normal
        echo "@{$this->login} ";
        parent::apresentar(); // Importando o método apresentar da classe pai
    }
}

// Criando um objeto com parâmetros da classe Usuario
$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar(); // Chamando o método apresentar da classe Usuario
unset($usuario); // Chamando o método destrutor da classe Usuario