<?php 

//arrays superglobais

$nome = (int)$_GET["a"];  //(int) : Converte a informaçao para int
                  //$_GET :variavel global que busca a informaçao ["a"] por GET

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

echo "<br>";

$ip2 = $_SERVER["SCRIPT_NAME"];

echo $ip2;


?>