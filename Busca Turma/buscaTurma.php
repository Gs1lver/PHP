<?php
 $turmas = array(
    "3DSD" =>array(
        123456 => "Fulano de Tal",
        789012 => "Ciclano Soares"),
    "2DSD" => array(
        234567 => "Beltrano da Silva",
        890123 => "Maria"),
    "1DSD" => array(
        456789 => "Alguem de Lá",
        012345 => "Alguem de Cá")
    );

    if (!isset($_GET["turma"]) || (trim($_GET["turma"]) == "")){
        echo "Informe a turma";
    } else {
        $turma = strtoupper($_GET["turma"]); //POR ENQUANTO VIA URL
        echo "<h1>Alunos da turma" . $turma . "</h1>";

        echo "<table border = '1px'>";

        //rsort($turmas[$turma]);  
        foreach($turmas[$turma] as $aluno){
            echo "<tr><td>" . $aluno . "</td></tr>";
        }

        echo "</table>";
    }
?>