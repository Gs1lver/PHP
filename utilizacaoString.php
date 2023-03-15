<?php

$texto = " cotil - unicamp ";

//trim - Retira espaço no inicio e final de uma string
echo "-" . trim($texto) . "-" . "<br>";

//ltrim - Retira espaço em branco de (ou outros caracteres) do final de uma string
echo "-" . ltrim($texto) . "-" . "<br>";

//rtrim - Retira espaços em ranco (ou otros caracteres) do inicio da string
echo "-" . rtrim($texto) . "-" . "<br>";

//tudo maiusculo
echo strtoupper($texto) . "<br>";

//tudo minusculo
echo strtolower($texto) . "<br>";

//primeira letra maiuscula
echo "uc: " . ucfirst($texto) . "<br>";

//primeiras letras maiusculas
echo ucwords($texto) . "<br>";

//retorna o tamanho da string
echo strlen($texto) . "<br>";

//reversão da string
echo strrev($texto) . "<br>";

//quebra a string a cada 3 caracteres
$str = str_split($texto, 3);
print_r($str);

echo "<br>";

//Encontra a posição da primeira ocorrencia de uma string
echo strpos($texto, "unicamp") . "<br>";

$email = "simone@cotil.unicamp.br";

//retorna a String a partir o caracter informado "@"
echo strchr($email, "@") . "<br>";

//retorna a string antes do caracter informado "@"
echo strchr($email, "@", true) . "<br>"; //true faz a função fazer o contrario (!)

//Retorna uma parte de uma string
echo substr('abcdef', 1) . "<br>";
echo substr('abcdef', 1, 3) .  "<br>";

echo str_replace("i", "X", $texto) . "<br>";

//casting
$foo = "0" ; //$foo é string (ASCII 48)
$foo += 2; //$foo é agora um inteiro (2)
$foo = $foo + 1.3; //$foo é agora um float (3.3)
echo $foo . "<br>";

$senha = "minhasenha";

/*
md5 - gera uma cópia criptografada - mão unica
** algoritmo de um hash de 128 bits - 32 caracteres
** -> problema: para a mesma string, sempre o mesmo resultado. Facil achar  na internet listas com resultados
** solução -> concatenar um salt 
*/
echo "<br> *** md5 *** <br>";
$x = md5($senha);
echo($x);
echo "<br>";

if(md5($senha) == $x){
    echo "Senha ok!<br><br>";
}

//com salt - Uma string de salt para a base da encriptação
$salt = "c0t1lUn1camp";
$senha = $senha . $salt;
echo "senha = " . $senha . "<br>";

/*
** sha1 - gera uma cópia criptografada -mão unica
** 160 bits - 40 caracteres
**considerar a mesma regra de segurança com o uso de salt, abordada no md5
*/
echo "<br> *** sha1 *** <br>";
$x = sha1($senha);
echo $x . "<br>";

if (sha1($senha) == $x){
    echo "Senha ok!<br><br>";
}

/*crypt - gera uma cópia criptografada
** retornará uma strin criptografada usando o algoritmo de encriptação Unix Standard DES-based ou algoritmos alternativos disponíveis no sistema. 
*/
echo "<br> *** crypt ***<br>";

//o 2o parametro é o salt, que se não fornecido, será gerado randomicamente pelo PHP cada vez que chaamr essa função
$x = crypt($senha, "");
//$x = crypt($senha, "c0t1lUn1camp");
echo $x . "<br>";

if(crypt($senha, "") == $x){
    echo "Senha ok!<br><br>"
    ;
}

//FUNÇÕES ESPECIAIS
/*BASE 64
é um mmetodo para codificação dos dados para transferencia na internet. Ela é uma codificação de mão dupla, e usando uma  segunda função voce pode descobrir 
a string original de uma string codificada.
*/
$string = 'O rato roeu a roupa do rei de Roma.';
$codificada = base64_encode($string);

echo "Resultado da codificação usando base64: " . $codificada . "<br><br>";

$original = base64_decode($codificada);
echo "Resultado da decodificação usando base64: " . $original;
?>