<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Alunos</h2>
    <form method="post">
        RA: <br>
        <input type="text" size="10" name="ra"><br>

        Nome<br>
        <input type="text" size="50" name="nome"><br>

        Curso<br>
        <select name="curso">
            <option value=""></option>
            <option value="CCD">Edificações</option>
            <option value="MED">Mecânica</option>
            <option value="PD">Desenvolvimento de Sistemas</option>
            <option value="ENF">Enfermagem</option>
            <option value="QPD">Qualidade</option>
            <option value="GEO">Geodésia</option>
        </select>
    </form>

</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        include("aluno.php");
        $aluno = new Aluno();

        $aluno->setRa($_POST["ra"]);
        $aluno->setNome($_POST["nome"]);
        $aluno->setCurso($_POST["curso"]);

        $aluno->exibir();
    }
?>
