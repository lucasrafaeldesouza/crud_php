<?php 
//ESCOPO GLOBAL
$nome = "Lucas Rafael";
$a = 10;
$b = 10;
$c = 10;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
//////////////////////

function exibeCidade() {
    global $cidade;
    $cidade = "Joinville-SC";
}

exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

