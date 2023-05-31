<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>

    <style>
        #sucess {
            color: green;
            font-weight: bold;
        }

        #error {
            color: red;
            font-weight: bold;
        }

        #warning {
            color: orange;
            font-weight: bold;
        }

    </style>

</head>

<body>

<a href="index.html">Home</a>
<hr>

<h2>Cadastro de Alunos</h2>
<div>
    <form method="post">

        RA:<br>
        <input type="text" size="10" name="ra"><br><br>

        Nome:<br>
        <input type="text" size="30" name="nome"><br><br>

        Curso:<br>
        <select name="curso">
            <option></option>
            <option value="Edificações">Edificações</option>
            <option value="Enfermagem">Enfermagem</option>
            <option value="GeoCart">Geodésia e Cartografia</option>
            <option value="Informática">Informática</option>
            <option value="Mecânica">Mecânica</option>
            <option value="Qualidade">Qualidade</option>
        </select><br><br>

        <input type="submit" value="Cadastrar">

        <hr>

    </form>
</div>

</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"]=== 'POST'){

        try{
            $ra = $_POST["ra"];
            $nome = $_POST["nome"];
            $curso = $_POST["curso"];

            if((trim($ra) == "") || (trim($nome)== "")){
                echo "<span id='warning'>RA e Nome são obrigatórios</span>";
            } else {
                include("conexaoBD.php");
                //verificando se o RA já existe no BD para n dar exception
                $stmt = $pdo->prepare("select * from alunosPhp where ra = :ra");
                $stmt->bindParam(':ra', $ra);
                $stmt->execute();

                $rows = $stmt->rowCount();

                if($rows <= 0){
                    $stmt = $pdo->prepare("insert into alunosPhp (ra, nome, curso) values (:ra, :nome, :curso)");
                    $stmt->bindParam(':ra', $ra); //binda o parametro :ra com a variavel $ra
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':curso', $curso);
                    $stmt->execute();

                    echo "<span id='sucess'>Aluno cadastrado com sucesso</span>";
                } else {
                    echo "<span id='error'>RA já cadastrado</span>";
                }
            }
        } catch(PDOExceptio $e){
            echo 'Error: ' . $e->getMessage();
        }
        
        $pdo = null; //fechando a conexão
    }
?>


