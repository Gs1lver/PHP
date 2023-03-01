<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <style>

    #aprovado{
        color: green;
        font-weight: bold;
    }

    #reprovado{
        color:red;
        font-weight:bold;
    }
    </style>
</head>
<body>
    
</body>


<?php

function calcMedia($n1, $n2){
    $media = ($n1+$n2)/2;
    return $media;

    /*
    echo "media = " . $media;
    if media < 6{
        echo "reprovado";
    } else {
        echo "aprovado";
    } */
}

function soma($v1, $v2, $v3){
    $soma = $v1 + $v2 + $v3;
    echo "Soma = " . $soma;
}

$media = calcMedia(7.0, 9.0);

echo  "Média = ". $media . "<br>";

if($media >= 6.0){
    echo "<span id = 'aprovado'>APROVADO</span>";
} else{
    echo "<span id = 'repovado'>REPOVOADO</span>";
}

?>
</html>