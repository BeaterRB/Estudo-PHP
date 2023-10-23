<?php

$nome = "atila";

/* 
function teste() {

    echo $nome;    // erro: variavel fora do escopo

}
*/ 


 function teste() {


    global $nome;
    echo $nome;   

} 


function teste2(){
    $nome = "joao";
    echo $nome;

}


echo ": escopo global" ." ".teste();
echo "<br>";
echo ": escopo local". " " .teste2();




?>