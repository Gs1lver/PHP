<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>
</head>

<body>

<a href="index.html">Home</a> | <a href="consulta.php">Consulta</a>
<hr>

<h2>Exclusão de Alunos</h2>

</body>
</html>

<?php

include("conexaoBD.php");

if (!isset($_POST["raAluno"])) {
    echo "Selecione o aluno a ser excluído!";
} else {
    $ra = $_POST["raAluno"];

    try {
        $stmt = $pdo->prepare('DELETE FROM alunosPhp WHERE ra = :ra');
        $stmt->bindParam(':ra', $ra);
        $stmt->execute();

        echo $stmt->rowCount() . " aluno de RA $ra removido!";

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
}

?>