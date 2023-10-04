<?php
//criação da function
function imprimirMensagem(){
    echo "Olá, ";
    echo "Até a proxima \n";
}

//chamar a função
imprimirMensagem();
imprimirMensagem();

$variavel = 1; //global

function trocarVariavel(){
    $variavel = 20; //local
    echo "\n" . "Durante a função: " . $variavel . "\n";
}

echo "\n" . "Antes: " . $variavel; //global
trocarVariavel();
echo "\n" . "Depois: " . $variavel; //global


function trocarVariavelReal(){
    global $variavel;
    $variavel = 20;//local
    echo "\n" . "Durante a função: " . $variavel . "\n";
}

echo "\n" . "Antes: " . $variavel; //global
trocarVariavelReal();
echo "\n" . "Depois: " . $variavel; //global
?>