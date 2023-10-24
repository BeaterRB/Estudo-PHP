<?php 

    echo  "tipo simples";
    echo "<br>"; 

$nome = "Atila";

$site = "www.atila.com.br";

$ano = 2002;

$salario = 3500.00;

$bloqueado = false;

////////////////////////////////////////////////////

    echo  "tipo composto";
    echo "<br>"; 

$frutas = array("maracuja", "Kiwi" , "Abacate");

//echo $frutas[1];

echo "<br>";

$nascimento = new DateTime();

//var_dump($nascimento);
////////////////////////////////////////////////////

    echo  "tipo especial";
    echo "<br>"; 

$arquivo = fopen("variaveis.php", "r");
//var_dump($arquivo);

$nulo = NULL
?>