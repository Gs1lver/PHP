<?php

$arrayExemplo = array("Linguagem1" => "Php", "Linguagem2" => "SQL", "Linguagem3" => 100, "Linguagem4" => "Assembly");

echo "<b>Array original: </b>";
print_r($arrayExemplo);


//FUNÇÃO SHUFFLE
shuffle($arrayExemplo);

echo "<hr>Após 'embaralhar' com shuffle(array) <br>";
print_r($arrayExemplo);

echo "<h4>Pressione F5 para atualizar a página e observe o resultado! </h4>";    

//FUNÇÃO SORT
sort($arrayExemplo);
echo "<hr>Após 'ordenar' com sort(array) <br>";
print_r($arrayExemplo);

//FUNÇÃO RSORT
rsort($arrayExemplo);
echo "<hr>Após 'ordenar' decrescente com rsort(array) <br>";
print_r($arrayExemplo);

//FUNÇÃO PARSE
 $strParse = "curso1=Informática&curso2=Edificações&curso3=Enfermagem";

 parse_str($strParse, $cursos);
 echo "<hr><b>Função Parse</b><br>";
 print_r($cursos);

 //FUNÇÃO EXPLODE
 $strExplode= "11/10/2005";

 $cursos = explode("/", $strExplode);
 echo "<hr><b>Função Explode: </b>";
 print_r($strExplode);
 echo "<br>Após o explode(array): <br>";
 print_r($cursos);

 //FUNÇÃO IMPLODE

echo "<hr><b>Função Implode: </b>";
$cursos = array("11", "10", "2005");
print_r($cursos);
echo "<br> Após o implode: <br>";
$strImplode = implode("/", $cursos);
echo($strImplode);

?>