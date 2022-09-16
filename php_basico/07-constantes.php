<?php 
//CONSTANTES

define("NOME", "Lucas Rafael"); 
define("IDADE", 21); 
define("ALTURA", 1.75); 
define("CASADO", true); 

define("TIMES", ['Grêmio', 'Joinville', 'Curitiba', 'Criciuma']);

echo ' Meu nome é '.NOME.' Minha idade é '.IDADE.' Minha altura é '.ALTURA.' E eu sou casado ';
echo "<hr>";

var_dump(TIMES);

function exibeNome(){
    echo NOME;
}

exibeNome();