<?php
//--------------------------------------------------------variaveis--------------------------------------------------------

$nome = "COTIL";
echo $nome;
echo "<br><br>";

var_dump($nome); // exibe o tipo de dado, tamanho usado e valor
echo "<br><br>";

$outroNome = "UNICAMP";

echo $nome . " " . $outroNome; //concatenar é com .
echo "<br><br>";

unset($nome); //remove a variavel. Se quiser limpar várias, basta separar por ","

if(!isset($nome)) {
    echo "a variavel está vazia! <br><br>";
    
} else {
    echo $nome;
    echo "<br><br>";
}

$valor = 50.15;
echo $valor;
echo "<br><br>";

$disciplinas = array("BD", "LP", "DAW");
echo $disciplinas[2];
echo "<br><br>";

$nulo = null;
$vazio = "";

//--------------------------------------------------------constantes--------------------------------------------------------

define("PI", 3.14);
define ("NOME_ALUNO", "Maria");

$resultado = 3 * PI;
echo $resultado . "<br><br>";
echo "Nome do Aluno: " . NOME_ALUNO . "<br><br>";

//-------------------------------------------------------- super variaveis --------------------------------------------------------
echo "<br><br>";
echo $_SERVER["SERVER_ADDR"] . "<br>";
echo $_SERVER["SERVER_NAME"] . "<br>";
echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
echo $_SERVER["REMOTE_ADDR"] . "<br>";
echo $_SERVER["SCRIPT_NAME"] . "<br>";

 // if ("1" === "1") operador "===" compara se dois valores são iguais em valor e tipo
 // if (1 <> "1") "<>" tambem é usado como diferença
?>