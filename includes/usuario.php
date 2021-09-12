<?php
include('pessoa.php'); // Incluindo o arquivo pessoa.php

class Usuario extends Pessoa { // Criando classe Usuario herdando da classe Pessoa do arquivo pessoa.php

    function __construct($nome, $idade, $login) { // Método Construtor
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário Criado!! <br>';
    }

    function __destruct() { // Método Destrutor
        echo 'Usuario diz: Tchau!! <br>';
        parent::__destruct();
    }

    public function apresentar() { // Método Normal
        echo "@{$this->login}: ";
        parent::apresentar();
    }

}