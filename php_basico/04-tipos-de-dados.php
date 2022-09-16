<?php

/************ Escalares ************/

//STRING 
$nome = "Ola mundo";
var_dump($nome);

if (is_string($nome)) :
    echo "é uma string";
else :
    echo "não é uma string";
endif;

echo "<hr>";

//INT
$idade = 10;
var_dump($idade);

if (is_int($idade)) :
    echo "é um inteiro";
else :
    echo "não é um inteiro";
endif;

echo "<hr>";

//FLOAT
$altura = 1.75;
var_dump($altura);

if (is_float($altura)) :
    echo "é um float";
else :
    echo "não é um float";
endif;

echo "<hr>";

//BOOLEAN
$admin = true;
var_dump($admin);

if (is_bool($altura)) :
    echo "é um boolean";
else :
    echo "não é um boolean";
endif;

echo "<hr>";


$carros = array ("Gol","Uno","Camaro",12,13,14, true);
var_dump($carros);

if (is_array($carros)) :
    echo "é um array";
else :
    echo "não é um array";
endif;

echo "<hr>";

//OBJECT 

class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome; 
    }
}

$cliente = new Cliente();

var_dump($cliente);

if (is_object($cliente)) :
    echo "é um objeto";
else :
    echo "não é um objeto";
endif;

echo "<hr>";