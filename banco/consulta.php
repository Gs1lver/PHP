<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.html"></a>
    <hr>

    <h2>Consulta de Alunos</h2>
    <form action="post">
        RA: <br>
        <input type="text" size="10" name="ra">
        <input type="submit" value="consultar">
        <hr>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST METHOD"] === 'POST' ){
        include("conexaoBD.php");
        if(isset($_POST['ra']) && ($_POST['ra'] != "")){
            $ra = $_POST['ra'];
            $stmt = $pdo->prepare("SELECT * FROM alunos WHERE ra = :ra order by curso, nome");
            $stmt->bindParam(':ra', $ra);
        } else{
            $stmt = $pdo->prepare("SELECT * FROM alunos order by curso, nome");
        }

        try{
            //buscando dados
            $stmt->execute();

            echo "<form method='post'>";
            echo "<table border='1px'>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>RA</th>";
            echo "<th>Nome</th>";
            echo "<th>Curso</th>";
            echo "</tr>";

            while($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td><input type='radio' name='ra' value='" . $row['ra'] . "'></td>";
                echo "<td>" . $row['ra'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['curso'] . "</td>";
                echo "</tr>";
            }
            echo "</table><br>";
            echo "<button type='submit' formaction='remove.php'>Excluir Aluno</button>";
            echo "<button type='submit' formaction='edicao.php'>Editar Aluno</button>";
            echo "</form>";
        } catch (PDOException $e){
            echo 'Error: ' . $e->getMessage();
        }

        $pdo = null;
    }
?>