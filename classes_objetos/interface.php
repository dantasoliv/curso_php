<div class="titulo">Interface</div>

<?php
interface Animal { // Criando uma interface
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero { // Uma interface pode extender varias interfaces
    function latir(): string;
    function correr();
}

interface Felino {
    function correr();
}

class Cachorro implements Canino { // Implantando uma interface na classe, uma classe pode implementar varias interfaces
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'Au Au';
    }

    function mamar() {
        return "Irei tomar leite!";
    }

    function correr() {
        return "Estou correndo";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';
echo '<br>';
var_dump($animal);
echo '<br>';
var_dump($animal instanceof Cachorro); // Verificar se uma variável é uma instância de uma classe
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);