<?php

function consultar(){}
function cadastrar(){}
$op = 3;
switch($op){
    case 1:
        cadastrar();
        echo "Cadastro";
        break;
    case 2:
        //emitirRelatórioVenda();
        echo "Relatorios";
        break;
    default:
        echo "Opcao invalida";
        break;
}

echo "<br><br> oi após o break" . "<br>";

$x = 2;

/*if($x%2 == 0){
    $resultado= "par";
} else {
    $resultado = "impar";
}*/

$resultado = ($x%2)==0 ? "par" : "impar"; //ternária

echo $resultado;

($op == 1) ? cadastrar() : consultar(); // pode usar com funções
?>