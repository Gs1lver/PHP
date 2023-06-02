<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão de Alunos</title>
</head>
<body>
    <a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
    <hr>
    <h2>Exclusão de Alunos</h2>    
</body>
</html>
<?php 

if(!isset($_POST["raAluno"])){
    echo "Selecione o aluno a ser excluido!";
} else {
    $ra = $_POST["raAluno"];

    try{
        include("conexaoBD.php");
        $stmt = $pdo->prepare('DELETE FROM alunosPhp WHERE');
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

        echo $stmt->rowCount() . "aluno de RA $ra foi removido!";
    } catch (PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
    $pdo = null;
}

?>