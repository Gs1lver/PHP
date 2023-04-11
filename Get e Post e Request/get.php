<?php
if($_GET){
    echo "<pre>";
    print_r($_GET);
    $login = $_GET['login'];
    $senha = $_GET['senha'];
    echo $login . '=>' . $senha . '<br><br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get e Post - PHP</title>
</head>
<body>
    
<!-- O método GET é utilizado quando queremos passar poucas ou pequenas informações, passando os parâmetros na URL-->
<!-- O método POST é mais seguro e tem uma capacidade da dados melhores, sem limite. Utilizamos quando queremos sistemas de acesso restrito com sessões-->

<form action="" method="GET">
    <input type="text" name="login" placeholder="login">
    <br><br>
    <input type="password" name="senha" placeholder="senha">
    <br><br>
    <input type="submit">
</form>
</body>
</html>