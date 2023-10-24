<?php

/*

= : Operador de Atribuiçao

ex: $nome = "atila"
///////////////////////////////
. : operador de concatenaçao

ex: echo $nome . "é meu nome"
///////////////////////////////
+= & -= & *=: Operador de Atribuiçao - adiciona um valor em cima do valor antigo

ex: $valorCama = 1000;
    $valorTravesseiro = 100
    valorCama += $valorTravesseiro
    echo $valorCama
*/


echo  "Operador de atribuiçao";
echo "<br>"; 

$nome = "atila";

echo $nome . " é meu nome";
echo "<br> <br>";

$carrinho = 0;
$carrinho += 1000;
$carrinho += 100;
$carrinho += 350;
$carrinho -= 10;       // -10 reais
$carrinho *= .9;       // -0.9 de desconto em porcentagem

$item = "Cama (1.000) , Travesseiro(100) , Cabeceira(350)";

echo $carrinho . " Valor Total da Compra dos items:";
echo "<br>" .$item

?>