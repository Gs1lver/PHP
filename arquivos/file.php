<?php

    $arquivo = file("listagemAlunos.txt");

    for($i = 0; $i < count($arquivo); $i++){
        echo "Linha" . $i . ": " . $arquivo[$i] . "<br>";
    }

?>