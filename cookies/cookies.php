<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        Nome:<br>
        <input type="text" name="nome" size="30"><br><br>

        Idade:<br>
        <input type="text" name="idade" size="30"><br><br>

        Cor:<br>
        <input type="color" name="cor"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cor = $_POST['cor'];

        setcookie("Nome", $nome); //expira quando sai do navegador
        setcookie("Idade", $idade); 
        setcookie("Cor", $cor);
        setcookie("contaVisitas", 0);

        echo "<br> Cadastro efetuado com sucesso";
    }
?>