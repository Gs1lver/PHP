<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Controle de alunos</title>
</head>
<body>
    <a href="index.html"></a> | <a href=""></a>
</body>

<?php 

    if(!isset($_POST["raAluno"])){
        echo "Selecione o aluno a ser editado: ";
    } else {
        $ra = $_POST["raAluno"];
    }

    try{
        include("conexaoBD.php");
        $stmt = $pdo->prepare('select * from alunos where ra = :ra');
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

        $edificacoes = "";
        $enfermagem = "";
        $geodesia = "";
        $informatica = "";
        $mecanica = "";
        $qualidade = "";

        while($row = $stmt->fetch()){

            //vai ter um if aqui
            if($row['curso'] == "Edificações"){
                $edificacoes = "selected";
            } else if($row['curso'] == "Enfermagem"){
                $enfermagem = "selected";
            } else if($row['curso'] == "GeoCart"){
                $geodesia = "selected";
            } else if($row['curso'] == "Informática"){
                $informatica = "selected";
            } else if($row['curso'] == "Mecânica"){
                $mecanica = "selected";
            } else if($row['curso'] == "Qualidade"){
                $qualidade = "selected";
            } 

            echo "<form method='post' action='altera.php'>\n";
            echo "RA:<br>\n";
            echo "<input type='text' size='10' name='ra' value='$row[ra]' readonly><br><br>\n";
            echo "Nome:<br>\n";
            echo "<input type='text' size='30' name='nome' value='$row[nome]'><br><br>";
            echo "Curso:<br>\n";
            echo "<select name='curso'\n
                    <option></option>\n
                    <option value='Edificações' $edificacoes>Edificações</option>\n
                    <option value='Enfermagem' $enfermagem>Enfermagem</option>\n
                    <option value='GeoCart' $geodesia>Geodesia</option>\n
                    <option value='Informática' $informatica>Informática</option>\n
                    <option value='Mecânica' $mecanica>Mecânica</option>\n
                    <option value='Qualidade' $qualidade>Qualidade</option>\n
                    </select><br>\n";
            echo "<input type='submit' value=''>";
        }
      
    } 
?>