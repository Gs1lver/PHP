<?php
    $aExemplo = array("ra"=>18101,"serie"=>3,"aluno"=>array("nome"=>"José A.","sobrenome"=>"Matioli"));
    echo $aExemplo["ra"] . " - " . $aExemplo["aluno"]["sobrenome"] . " " . $aExemplo["aluno"]["sobrenome"];

    $bExemplo = array(201174,3,"José Alberto Matioli");
    echo$bExemplo[0] . " - " . $bExemplo[2];
    $bExemplo[2] = "J. A. Matioli";
    echo "<br>";
    echo $bExemplo[0] . " - " . $bExemplo[2];

    $meuArray = array("Isa","Nat","Lia","Lua");
    echo "<br>";
    print_r($meuArray);
    unset($meuArray[1]);

    echo "<br>";
    print_r($meuArray);

    $meuArray[1] = "WannaK";
    echo"<br>";
    print_r($meuArray);

    sort($meuArray);
    echo "<br>";
    print_r($meuArray);

    echo "<br>";
    echo count($meuArray);
    echo "<br>";
    echo sizeof($meuArray);

    echo "<br>";
    /*$i = 0;
    for($i == 0;$i <= sizeof($meuArray);$i++){
        echo $meuArray[$i] . ", ";
    }
    echo "<br>";*/

    foreach($meuArray as $people){
        echo $people . ", ";
    }
    echo "<br>";

    array_push($meuArray, "Ormo");

    foreach($meuArray as $people){
        echo $people . ", ";
    }
    echo "<br>";
    print_r($meuArray);

    echo "<br>";
    array_shift($meuArray);
    print_r($meuArray);

    echo "<br>";
    function insereDelimitador($valor){
        return "Pessoa: " . $valor;
    }

    $meuArray = array();
    $meuArray = array("Isabela", "Amelia", "Natália");

    $meuArray = array_map("insereDelimitador", $meuArray);
    foreach($meuArray as $people){
        echo $people . "<br>";
    }

    $meuArray = array("uno"=>"Isabela","dos"=>"Amelia","tres"=>"Natália");
    $key = array_search("Isabela", $meuArray);
    echo $key;
    echo "<br>";

    echo "<br>";
    $key2 = in_array("Isabela", $meuArray); //true = 1 e false = ""
    echo $key2;

    echo "<br>";
    echo array_key_exists("dos", $meuArray) ? "Tem pessoa" : "Não tem pessoa";
?>