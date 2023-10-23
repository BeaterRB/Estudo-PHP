<?php 

    //  tipo simples

$nome = "Atila";

$site = "www.atila.com.br";

$ano = 2002;

$salario = 3500.00;

$bloqueado = false;

////////////////////////////////////////////////////

    //  tipo composto
$frutas = array("maracuja", "Kiwi" , "Abacate");

//echo $frutas[1];

echo "<br>";

$nascimento = new DateTime();

//var_dump($nascimento);
////////////////////////////////////////////////////

    // tipo especial 

$arquivo = fopen("variaveis.php", "r");
//var_dump($arquivo);

$nulo = NULL
?>